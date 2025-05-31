<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
{
    //detail view
    public function detail()
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('profile.detail', compact('user', 'profile'));
    }

    //edit view
    public function edit()
    {
        $profile = Auth::user()->profile;
        return view('profile.edit', compact('profile'));
    }

    //logic update profile
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'gender'          => 'required|string',
            'email'           => 'required|email|unique:users,email,' . $user->id,
            'university_name' => 'required|string',
            'majors'          => 'required|string',
            'prodi'           => 'required|string',
            'date_of_birth'   => 'required|date',
        ]);

        $data = $request->only([
            'gender',
            'email',
            'university_name',
            'majors',
            'prodi',
            'date_of_birth'
        ]);
        $data['user_id'] = $user->id;

        $profile = $user->profile;

        if ($profile) {
            $profile->update($data);
        } else {
            Profile::create($data);
        }

        // Ambil ulang data terbaru
        $user = User::find($user->id);
        $profile = $user->profile;

        return view('profile.detail', [
            'user' => $user,
            'profile' => $profile,
            'status' => 'Profile updated.'
        ]);
    }
}
