<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function edit()
    {
        return view('auth.passwords.edit');
    }

    public function update(UpdatePasswordRequest $request)
    {
        request()->user()->update([
            'password' => Hash::make(request('password'))
        ]);

        return redirect()->route('me')->with('status', 'Password has been changes');
    }
}
