<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        $images = '';
        try {
            if ($request->file('images')) {
                $images = $request->file('images')->store(
                    'foto', 'public'
                );    
            }
        } catch (\Throwable $th) {
        }

        if ($images) {
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'foto' => str_replace('foto', '', $images),
            ]);
        } else {
            auth()->user()->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->back()->with('success', 'Profile updated.');
    }
}
