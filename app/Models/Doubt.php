<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doubt extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'message',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_id',
        'response_person_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }
}
