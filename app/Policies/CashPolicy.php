<?php

namespace App\Policies;

use App\Models\Cash;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CashPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    public function cash(User $user, Cash $cash)
    {
        return $user->id === $cash->user_id;
    }
}
