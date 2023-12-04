<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\userCourses;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'image_id'
    ];

    public function userCourses() {
        return $this->hasMany(UserCourses::class);
    }

    public function modules() {
        return $this->hasMany(CoursesModules::class);
    }

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

    public function assistedLessons() {
        return $this->hasMany(AssistedLessons::class);
    }

    public function certificate() {
        return $this->hasOne(Certificate::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    public function image() {
        return $this->belongsTo(Image::class);
    }
}
