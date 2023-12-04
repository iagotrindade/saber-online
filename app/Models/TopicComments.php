<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicComments extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_id',
        'topic_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function topic() {
        return $this->belongsTo(Topic::class);
    }
}
