<?php

namespace App\Http\Controllers;

use App\Models\PrizeClaimed;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Debugbar;

class PrizeClaimedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $claimedPrize = PrizeClaimed::with('prizes')->with('users')->with('users_profile')->paginate(10);

        return Inertia::render('Dashboard',['claim_data'=>$claimedPrize]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function edit($id)
    {
        
        $claimedPrize = PrizeClaimed::with('prizes')->with('users')->with('users_profile')->find($id); 
        return Inertia::render('ClaimedPrize/Edit', compact('claimedPrize'));
    }

    public function update(Request $request, $id){   
        
        $prize = PrizeClaimed::where('idclaim',$id);
        Debugbar::info($request);
        $prize->update($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(PrizeClaimed $prizeClaimed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrizeClaimed $prizeClaimed)
    {
        //
    }
}
