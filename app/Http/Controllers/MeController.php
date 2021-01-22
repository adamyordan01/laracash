<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $debit = Auth::user()->cashes()
                ->where('amount', '>=', 0)
                ->get('amount')->sum('amount');
        $credit = Auth::user()->cashes()
                ->where('amount', '<', 0)
                ->get('amount')->sum('amount');
        $balances = Auth::user()->cashes()->get('amount')->sum('amount');
        $transactions = Auth::user()->cashes()->latest()->get();

        return view('me.index', [
            'debit' => $debit,
            'credit' => $credit,
            'balances' => $balances,
            'transactions' => $transactions,
        ]);
    }
}
