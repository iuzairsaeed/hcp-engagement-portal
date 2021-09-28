<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;

class OnUpload extends Notification implements ShouldQueue
{
    use Queueable;

    protected $route_id;
    protected $title;
    protected $body;
    protected $type;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->route_id = $data['route_id'];
        $this->title = $data['title'];
        $this->body = $data['body'];
        $this->type = $data['type'];

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'route_id' => $this->route_id,
            'title' => $this->title,
            'body' => $this->body,
            'type' => $this->type,
        ];
    }
}
