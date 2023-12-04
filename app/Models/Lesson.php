<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'course_id',
        'module_id',
        'archive_id'
    ];

    public function module() {
        return $this->belongsTo(CoursesModules::class);
    }

    public function archives() {
        return $this->hasMany(Archive::class);
    }

    public function assistedLessons() {
        return $this->hasMany(AssistedLessons::class);
    }

    public function doubts() {
        return $this->hasMany(Doubt::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    public function notes() {
        return $this->hasMany(Note::class);
    }
}
