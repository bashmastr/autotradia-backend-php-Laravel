<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Config;

class VerifyEmail extends Notification
{
    use Queueable;
    public static $toMailCallback;
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
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $verificationUrl);
        }
        $user = auth('api')->user();
        $user = auth('api')->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        $token->save();
        return (new MailMessage)
            ->subject(Lang::get('Verify Email Address'))
            ->line(Lang::get('Please click the button below to verify your email address.'))
            ->action(Lang::get('Verify Email Address'), $verificationUrl."&token=".$tokenResult->accessToken)
            ->line(Lang::get('If you did not create an account, no further action is required.'));
    }
    protected function verificationUrl($notifiable)
    {
        $prefix = config('frontend.url');
        $temporarySignedURL =URL::temporarySignedRoute(
            'verification.verify-api',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id'=>$notifiable->getKey(),
                'hash'=>sha1($notifiable->getEmailForVerification()),
            ]
        );


        return $prefix."/email/verify?backend=".$temporarySignedURL;
        // return URL::temporarySignedRoute(
        //     'verification.verify-api',
        //     Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
        //     [
        //      'id' => $notifiable->getKey(),
        //     'hash' => sha1($notifiable->getEmailForVerification()),

        //     ]

        // );


    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
