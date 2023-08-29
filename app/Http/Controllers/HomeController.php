<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use App\Models\UserProfile;
use App\Models\UserTrading;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function index(Request $request) {

        $prizes = Prizes::all();
        // $userTrading = UserTrading::where('iduser',$request->user()->id)->get();
        $userTrading = UserTrading::with('users.users_profiles')->where('iduser',$request->user()->id)->first();
        Debugbar::info("USER TRADING".json_encode($userTrading));
        return Inertia::render('Welcome',['prizes'=>$prizes,'user_trading'=>$userTrading]);
    }
}
