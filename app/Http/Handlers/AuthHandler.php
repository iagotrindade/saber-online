<?php

namespace App\Http\Handlers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Courses;
use App\Models\Image;
use App\Models\PermissionGroups;

class AuthHandler
{
    public static function getAccessDetails($request) {
        $location = Http::acceptJson()->get('https://ipinfo.io/'.$request->ip().'');

        if($location->json('error')) {
            $location = 'Localização do acesso Indeterminada.';
        } else {
            $location  = 'Localização aproximada: '.$location->json('city').' - '.$location->json('region').' '.$location->json('country').' no dia '.date('d/m/Y \á\s\ H:m', strtotime(Carbon::now())).'';
        }

        return $accessDetails = 'Acessado de um '.$request->header('sec-ch-ua-platform').', endereço IP '.$request->ip().'. '.$location.'';
    }

    public static function getLoggedUser() {
        $user = Auth::user();
        $user['image'] = $user->image;
        $user['permissionGroup'] = PermissionGroups::where('id', $user->permission_id)->first();
        $user['courses'] = $user->userCourses;
        $user['assistedLessons'] = $user->assistedLessons;
        $user['notes'] = $user->notes;
        $user['certificates'] = $user->certificates;
        $user['doubts'] = $user->doubts;
        $user['topics'] = $user->topics;
        $user['topicComments'] = $user->topicComments;
        return $user;
    }
}
