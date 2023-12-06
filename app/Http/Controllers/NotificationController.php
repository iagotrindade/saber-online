<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Handlers\AuthHandler;
use App\Http\Handlers\DateHandler;
use App\Models\User;

class NotificationController extends Controller
{
    public $user;
    public $date;

    public function index() {
        $this->user = AuthHandler::getLoggedUser();
        $this->date = DateHandler::getCurrentDate();

        return view('notifications', [
            'user' => $this->user,
            'date' => $this->date,
        ]);
    }
}
