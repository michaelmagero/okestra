<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApplicantReservationConfirmation extends Notification
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
        $applicant = Applicant::find($id);
        $vehicle = Vehicle::find($id);
        return (new MailMessage)
            ->greeting('Hello!')
            ->subject('Kommute Reservation')
            ->from('info@kommute.africa', 'Kommute Financing Ltd')
            ->line('You have successfully reserved ' . $vehicle->make . $vehicle->model . $vehicle->year . 'of Engine No ' . $applicant->engine_number .
                ' and Chasis No ' .  $applicant->chasis_number . '. Your total deposit will be KES ' . $deposit . ' and your monthly fees will be ' . $monthly . '.')
            ->line('Thank you for using our signing up with TIA360!');
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
