<?php

// namespace App\Http\Controllers;

// use App\Http\Requests\ProfileUpdateRequest;
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\View\View;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class ProfileController extends Controller
{
    /**
     * Show profile page
     */
    public function index()
    {
        $user = Auth::user();
        return view('pages.profile');
    }

    /**
     * Update profile information
     */
    public function updateInfo(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = $request->user();


        if (!$user) {
            abort(403);
        }

        $user->save();



        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();


        return back()->with('success', 'Profile updated successfully.');
    }

    /**
     * Update user password
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        /** @var \App\Models\User $user */
        $user = $request->user();

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password updated successfully.');
    }


    /**
     * Update avatar
     */
    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        /** @var \App\Models\User $user */
        $user = $request->user();

        // Delete old avatar if exists
        if ($user->avatar && \Illuminate\Support\Facades\Storage::disk('public')->exists($user->avatar)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($user->avatar);
        }

        // Ensure folder exists
        if (!\Illuminate\Support\Facades\Storage::disk('public')->exists('avatars')) {
            \Illuminate\Support\Facades\Storage::disk('public')->makeDirectory('avatars');
        }

        // Store new avatar
        $path = $request->file('avatar')->store('avatars', 'public');

        $user->avatar = $path;
        $user->save();

        return back()->with('success', 'Avatar updated successfully.');
    }
}
