<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));


    }

    public function update(User $user)
    {

     $attributes =    \request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash',Rule::unique('users')->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255',Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);
     $user->update($attributes);
     return redirect($user->path());
    }

}
