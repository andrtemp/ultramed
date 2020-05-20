<?php

if (!function_exists('current_user')) {
    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    function current_user()
    {
        return \Illuminate\Support\Facades\Auth::user();
    }
}


if (!function_exists('user_role')) {
    function user_role()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        return is_null($user) ? null : $user->role;
    }
}

if (!function_exists('check_role')) {
    function check_role($role)
    {
        /** @var \App\User $user */
        $user = \Illuminate\Support\Facades\Auth::user();
        return is_null($user) ? false : $role === $user->role;
    }
}

