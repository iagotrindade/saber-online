<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesModules extends Model
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
        'course_id'
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function lessons() {
        return $this->hasMany(Lesson::class, 'module_id', 'id');
    }
}
