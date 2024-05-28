<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Log;

class GoogleAuthController extends Controller
{


    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // dd($googleUser);
            $user = Profiles::where('google_id', $googleUser->getId())->first();

            if (!$user) {
                // If user does not exist, create a new profile
                $newUser = Profiles::create([
                    'full_name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'username' => $googleUser->getName(),
                    'profile' => $googleUser->getAvatar() ?: null,
                    'google_id' => $googleUser->getId(),
                ]);

                Auth::login($newUser);
                return redirect()->intended('posts.home');
            } else {
                // If user exists, log them in
                Auth::login($user);
                return redirect()->intended('posts.home');
            }
        } catch (\Exception $e) {
            Log::error('Something went wrong: ' . $e->getMessage());
            dd('Something went wrong: ' . $e->getMessage());
            // return redirect()->route('login')->with('error', 'Something went wrong. Please try again later.');
        }
    }

}
