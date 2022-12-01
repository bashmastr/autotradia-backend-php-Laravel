<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserNotification extends Notification
{
    use Queueable;

    private $details;



    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        //

        $this->details = $details;


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

    public function toMail($notifiable)
    {
         return (new MailMessage)
                    ->greeting($this->details['user_name'])
                    ->line($this->details['user_email'])
                    ->line($this->details['message'])
                    ->line($this->details['created_at']);
                   
    }

    public function toDatabase($notifiable)
    {
        return [
           'data' => $this->details
        ];
    }


    
}
