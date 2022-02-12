<?php

namespace App\Services;

use App\Models\User;
use App\Contracts\Social;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Contracts\User as BaseContract;

class SocialService implements Social
{

    public function loginUser(BaseContract $socialUser, string $network)
    {
        $user = User::where('email', $socialUser->getEmail())->first();
        if($user) {
            $user->name = $socialUser->getName();

            if($user->save()) {
                \Auth::loginUsingId($user->id);
                return route('account');
            }
        }else {
            User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make($user->password),
            ]);
            return route('register');
        }

        throw new \Exception("You get error was network: " . $network);
    }
}
