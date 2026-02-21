<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MemberInvitedNotification extends Notification
{
    use Queueable;

    public function __construct(
        public readonly string $tenantName,
        public readonly string $acceptUrl,
        public readonly string $role,
        public readonly string $inviterName,
    ) {}

    /**
     * Get the notification's delivery channels.
     *
     * @return list<string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('You have been invited to join '.$this->tenantName)
            ->greeting('You are invited!')
            ->line(sprintf('%s invited you to join %s as %s.', $this->inviterName, $this->tenantName, $this->role))
            ->line('This invitation link is one-time and expires in 7 days.')
            ->action('Accept invitation', $this->acceptUrl)
            ->line('If you did not expect this invitation, you can safely ignore this email.');
    }
}
