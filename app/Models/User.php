<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\userCourses;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ResetPasswordNotification;
use App\Models\PasswordResetTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'temporary_access_hash',
        'status',
        'expiration_time'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'image_id',
        'permission_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    /**
     * Send a password reset notification to the user.
     *
     * @param  string  $token
     */

     public function sendPasswordResetNotification($token): void
     {
        $url = url('/change_password?token='.$token);

        $resetList = PasswordResetToken::all();

        foreach ($resetList as $data) {
            if(Hash::check($token, $data->token)) {
                $user = User::where('email', $data->email)->first();
            }
        }

        $this->notify(new ResetPasswordNotification($url, $user->name));
     }

    public function userCourses() {
        return $this->hasMany(UserCourses::class);
    }

    public function assistedLessons() {
        return $this->hasMany(AssistedLessons::class);
    }

    public function certificates() {
        return $this->hasMany(Certificate::class);
    }

    public function doubts() {
        return $this->hasMany(Doubt::class);
    }

    public function notes() {
        return $this->hasMany(Note::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    public function topicComments() {
        return $this->hasMany(TopicComments::class);
    }


    public function image() {
        return $this->belongsTo(Image::class);
    }
}
