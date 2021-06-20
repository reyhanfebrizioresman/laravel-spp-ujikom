<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    // public function history()
    // {
    //     $pembayaran = Pembayaran::all();
    //     $user = User::get();
    //     return view('history',compact('pembayaran','user'));
    // }

    public function search(Request $request)
    {
        $q = $request->input('search');
        $pembayaran = Pembayaran::where('nisn','LIKE','%' .$q. '%')->get();
        return view('history',compact('pembayaran'));

    }
}
