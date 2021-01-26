<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        // dd($user);
        return view('profile.show', [
            'user' => $user,
        ]);
    }
    
    public function edit(User $user)
    {
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        request()->validate([
            'name' => 'required',
            'picture' => 'required|image|max:1024'
        ]);

        // $user->name = request('name');
        
        // if (request()->file('picture')) {
        //     if ($user->picture && file_exists(storage_path('app/public/' . $user->picture))) {
        //         \Storage::delete('public/' . $user->picture);
        //     }
        //     $picture = request()->file('picture')->store('profile', 'public');
        //     $user->picture = $picture;
        // }

        // // dd($user);
        // $user->save();

        // return redirect()->route('me')->with('status', 'Profile has been changes');
            
        //pembatas

        // if(request()->file('picture')) {
        //     \Storage::delete($user->picture);
        //     $picture = request()->file('picture')->store("images/profile", 'public');
        // } else {
        //     $picture = $user->picture;
        // }

        // $attr = request()->all();

        // $attr['name'] = request('name');
        // $attr['picture'] = $picture;
        // // dd($attr);
        // $user->update($attr);
        
        // $user = User::find($id); //AMBIL DATA PRODUK YANG AKAN DIEDIT BERDASARKAN ID

        $filename = $user->picture; //SIMPAN SEMENTARA NAMA FILE IMAGE SAAT INI

        //JIKA ADA FILE GAMBAR YANG DIKIRIM
        if (request()->hasFile('picture')) {
            $file = request()->file('picture');
            $filename = time() . "-" . Str::slug(request('name')) . "." . $file->getClientOriginalExtension();

            $file->storeAs('public/images/profile', $filename);

            \File::delete(storage_path('app/public/images/profile/', $user->picture));
        }

        $user->update([
            'name' => request('name'),
            'picture' => $filename
        ]);

        return redirect()->route('me')->with('status', 'Profile has been changes');


    }
}
