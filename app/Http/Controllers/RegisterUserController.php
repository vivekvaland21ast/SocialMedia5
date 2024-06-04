<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;
use App\Models\Profiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegisterUserController extends Controller
{
    public function userRegister(Request $request)
    {
        try {
            $request->validate([
                'fullname' => 'required|string',
                'username' => 'required|string',
                'email' => 'required|email|unique:profiles,email',
                'password' => 'required',
                // 'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($request->hasFile('profileImage')) {
                $profileImage = $request->file('profileImage');
                $imageName = time() . '_' . $profileImage->getClientOriginalName();
                $profileImage->move(public_path('profile_images'), $imageName);
            } else {
                $imageName = null;
            }

            $user = Profiles::create([
                'full_name' => $request->input('fullname'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'profile' => $imageName,
            ]);

            SendWelcomeEmail::dispatch($user);

            return redirect()->back()->with('success', 'Profile created successfully! Welcome email will be sent shortly.');

        } catch (\Exception $e) {
            Log::error('User registration failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create profile.');
        }
    }
}

