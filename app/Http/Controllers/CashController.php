<?php

namespace App\Http\Controllers;

// use App\Models\Cash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashController extends Controller
{
    public function create()
    {
        return view('cash.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
        ]);

        $slug = request('name') . '-' . Str::random(6);
        $when = request('when') ?? now();
        Auth::user()->cashes()->create([
            'name' => request('name'),
            'slug' => Str::slug($slug),
            'when' => $when,
            'amount' => request('amount'),
            'description' => request('description'),
        ]);
    }
}
