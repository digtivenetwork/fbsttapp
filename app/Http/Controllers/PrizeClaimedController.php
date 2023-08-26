<?php

namespace App\Http\Controllers;

use App\Models\PrizeClaimed;
use Inertia\Inertia;

class PrizeClaimedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Inertia::render('Dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
