<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get user number
         $nombreUtilisateur=User::all()->count();
         $nombrePatient=Patient::all()->count();
         $data['patients'] = Patient::join("users", 'patients.id_patient', '=', 'users.id_patient')->where('users.id', Auth::user()->id)->get();
        return view('home',["nombreUtilisateur"=>$nombreUtilisateur,"nombrePatient"=>$nombrePatient],$data);
    }
}
