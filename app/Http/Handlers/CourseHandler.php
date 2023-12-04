<?php

namespace App\Http\Handlers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\AssistedLessons;

class CourseHandler
{
    public static function getUserCourseInfo($user) {
        $userCourses = $user->userCourses;

        foreach ($userCourses as $userCourse) {
            $userCourse['name'] = $userCourse->course->name;

            $userCourse['assistedLessons'] = AssistedLessons::where('user_id', $user->id)
                                                              ->where('course_id', $userCourse->course_id)
                                                              ->get()->count();

            $userCourse['assistedLessonsPercent'] = round(100 / $userCourse->course->lessons->count() * $userCourse['assistedLessons'], 1);
        }

        return $userCourses;
    }
}
