<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course;
use App\Http\Handlers\AuthHandler;
use App\Http\Handlers\DateHandler;
use App\Http\Handlers\CourseHandler;
use App\Models\UserCourses;
use App\Models\PermissionGroups;
use App\Models\AssistedLessons;
use App\Models\Update;



class DashboardController extends Controller
{
    public $user;
    public $courses;
    public $userCourses;
    public $date;
    public $teachers;
    public $updates;

    public function index(Request $request) {

        $this->user = AuthHandler::getLoggedUser();
        $this->courses = Course::all();
        $this->userCourses = CourseHandler::getUserCourseInfo($this->user);

        foreach ($this->courses as $course) {
            $course['lessons'] = $course->lessons->count();
        }

        $this->date = DateHandler::getCurrentDate();

        $teachersGroup = PermissionGroups::where('name', 'Professor')->first('id');

        $this->teachers = User::where('permission_id', $teachersGroup->id)->limit(3)->get();

        $this->updates = Update::all();

        return view('dashboard', [
            'user' => $this->user,
            'courses' => $this->courses,
            'date' => $this->date,
            'userCourses' => $this->userCourses,
            'teachers' => $this->teachers,
            'updates' => $this->updates
        ]);
    }
}
