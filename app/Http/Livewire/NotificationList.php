<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notification;

class NotificationList extends Component
{
 
    public function render()
    {
        $notifications = new Notification; 
        return view(('livewire.notification-list'), [
            'notifications' =>auth()->user()->unreadNotifications()->latest()->take(10)->get(),
        ]);
       
    }
}
