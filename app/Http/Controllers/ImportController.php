<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use App\Models\Import;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Excel;
use Illuminate\Support\Facades\Log;
use Debugbar;
 
class ImportController extends Controller
{
    
    public function index(){

        $import = Import::with('users')->latest()->paginate(10);
        // $import = Import::all();
        Import::leftJoin('users', 'import_logs.imported_by', '=', 'users.id')
        ->select('import_logs.*', 'users.name as username')->paginate(10);
        
        return Inertia::render('Import', ['import_data'=>$import]);
    }

    public function uploadform(){
        return Inertia::render('Import/ImportForm');
    }
    
    public function upload(Request $request){
        
        $request->validate([
            'file' => 'required|file|mimes:xlsx,csv,excel,xls',
        ]);

        $user = User::get();
        
        $thefile = $request->file('file');

        Excel::import(new CustomerImport($user), $thefile);

        Import::create([
            'filename'=>$thefile->getClientOriginalName(),
            'status'=>1,
            'imported_by'=>auth()->user()->getAuthIdentifier(),
            'message'=>'Sucess'
        ]);
        
        return back();
    }
}
