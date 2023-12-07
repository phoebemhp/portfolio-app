<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {
            $input = $request->all();
            $profile = Profile::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'image' => $input['image'], 
                    'autobiography' => $input['autobiography'],
                    'contact_no' => $input['contact_no'],
                    'dob' => $input['dob'],
                    'address' => $input['address'],
                    'occupation' => $input['occupation'],
                    'linkedin_url' => $input['linkedin_url'],
                    'dribble_url' => $input['dribble_url'],
                    'behance_url' => $input['behance_url']
                ]
            );
            $user->update([
                'name' => $input['name'],
                'email' => $input['email']
            ]);
            return redirect()->route('profile.show', $user)->with('success',"Profile succesfully updated!");
        } catch (Exception $e) {
            return redirect()->route('profile.show', $user)->with('error',"Profile failed to update.");
        }
    }
}
