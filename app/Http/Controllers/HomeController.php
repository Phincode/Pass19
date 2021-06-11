<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


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
        // $data['patients'] = Patient::join("users", 'patients.id_patient', '=', 'users.id_patient')->where('users.id', Auth::user()->id)->get();
        return view('home',["nombreUtilisateur"=>$nombreUtilisateur,"nombrePatient"=>$nombrePatient]);
    }

    /**
     * Search user certificat with given patient code.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function searchCertificat(Request $request)
    {
        $code=$request->code;
        $contact=$request->tel;
        $patient=Patient::select()
                    ->where('tel','=',$contact)
                    ->where('code_patient','=',$code)
                    ->get();
        
        if(sizeof($patient)==0){
            return back()->withErrors(['error'=>'CERTIFICAT NOT FOUND CHECK YOUR CODE']);

        }  
        $patient=$patient->first();
          $var = "Nom et prenom: $patient->nom_patient $patient->prenom_patient,\n Date de naissance :$patient->nee \n Vaccin: $patient->vaccin,\n Derniere vaccination: $patient->updated_at, \n Etat vaccination: TERMINER";
          $qrcode = QrCode::size(200)->generate("$var");
          return view('patient.pdf',compact('patient','qrcode'));            

                   
     
    }
}
