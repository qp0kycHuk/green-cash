<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\SmscRu\SmscRuChannel;
use NotificationChannels\SmscRu\SmscRuMessage;
use Illuminate\Notifications\Messages\MailMessage;

class SendVerifySMS extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [SmscRuChannel::class];
    }

    /**
     * Get the phone representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \NotificationChannels\SmscRu\SmscRuMessage;
     */
    public function toSmscRu($notifiable)
    {
        //info("Your verification code is {$notifiable->phone_verify_code}");
        return SmscRuMessage::create("Your verification code is #{$notifiable->phone_verify_code}");
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
            //
        ];
    }
}
