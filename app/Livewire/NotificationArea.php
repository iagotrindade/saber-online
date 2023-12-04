<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;

class NotificationArea extends Component
{
    public $user;
    public $newNotificationCount;
    public $notificationAreaDisplay = 'none';

    public function render()
    {
        return view('livewire.notification-area');
    }

    public function mount($user)
    {
        $this->user = $user;
        $this->newNotificationCount = count($this->user->unreadNotifications);
    }

    public function readNotifications() {
        if($this->notificationAreaDisplay === 'none') {
            $this->notificationAreaDisplay = 'block';
        }

        else {
            $this->notificationAreaDisplay = 'none';
            foreach ($this->user->unreadNotifications as $notification) {
                $notification->markAsRead();
            }
        }

        $this->newNotificationCount = 0;
    }
}
