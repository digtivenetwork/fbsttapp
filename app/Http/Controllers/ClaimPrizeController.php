<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ClaimPrizeController extends Controller
{
    //
    public function index(){
        $prizes = Prizes::all();
        // $userTrading = UserTrading::where('iduser',$request->user()->id)->get();
        $userTrading = UserTrading::with('users.users_profiles')->where('iduser',$request->user()->id)->first();
        // Debugbar::info("USER TRADING".json_encode($userTrading));
        return Inertia::render('ClaimPrize',['prizes'=>$prizes,'user_trading'=>$userTrading]);
    }
}
