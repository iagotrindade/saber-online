<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\PermissionGroups;
use App\Models\Course;
use App\Models\Note;
use App\Models\Topic;
use Illuminate\Support\Str;


class DashboardSearch extends Component
{
    public $searchTerm;
    public $areaHeight;
    public $areaOverflow;

    public $teachers = [];
    public $courses = [];
    public $topics = [];
    public $notes = [];

    public function render()
    {
        if(!empty($this->searchTerm)) {
            $this->areaHeight = '350px';
            $this->areaOverflow = 'scroll';
        }
        else {
            $this->areaHeight = '48px';
            $this->areaOverflow = 'hidden';
        }

        return view('livewire.dashboard-search');
    }

    public function searchFunction()
    {
        if($this->searchTerm != "") {
            $teachersGroup = PermissionGroups::where('name', 'Professor')->first('id');

            $this->teachers = User::where('name', 'like', ''.$this->searchTerm.'%')
                        ->where('permission_id', $teachersGroup->id)
                        ->orWhere('email', 'like', ''.$this->searchTerm.'%')
                    ->get();

            $this->courses = Course::where('name', 'like', ''.$this->searchTerm.'%')
                ->get();

            $this->topics = Topic::where('title', 'like', ''.$this->searchTerm.'%')
                    ->orWhere('body', 'like', ''.$this->searchTerm.'%')
                ->get();

            $this->notes = Note::where('body', 'like', ''.$this->searchTerm.'%')
                ->get();
        }
    }
}
