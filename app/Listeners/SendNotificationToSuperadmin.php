<?php

namespace App\Listeners;
use App\Notifications\InformAdminOfNewlyRegisteredUser;
use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;


class SendNotificationToSuperadmin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $user->notify(new InformAdminOfNewlyRegisteredUser($user));
    }
}
