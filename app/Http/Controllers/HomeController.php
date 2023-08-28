<?php

namespace App\Http\Controllers;

use App\Models\Prizes;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function index(Request $request) {

        $prizes = Prizes::all();
        // $userProfile = UserProfile::where('iduser');
        // $request->user()->id;
        // return $prizes;
        return Inertia::render('Welcome',['prizes'=>$prizes]);
    }
}
