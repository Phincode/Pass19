<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $rules = [
            'nom_patient' => 'required|max:30',
            'prenom_patient' => 'required|max:45',
            'adresse' => 'required|max:100',
            'tel' => 'required|digits:10',
            'nee' => 'required',
            'lieu' => 'required|max:45',
            'nom_prenom_med' => 'required|max:75',
            'tel_med' => 'required|digits:10',
            'specialite_med' => 'required|max:37',
            'vaccin' => 'required|max:22',
        ];

        $customMessages = [
            'nom_patient.required' => 'Veuillez entrer le nom du patient',
            'nom_patient.max' => 'Le nom du patient ne peux pas être supérieur à 30 caractères',
            'prenom_patient.required' => 'Veuillez entrer le prénom du patient',
            'prenom_patient.max' => 'Le nom du patient ne peux pas être supérieur à 45 caractères',
            'adresse.required' => 'Veuillez entrez l\'adresse',
            'adresse.max' => 'l\'adresse ne peux pas être supérieur à 100 caractères',
            'tel.required' => 'Veuillez entrer votre numéro de téléphone svp',
            'tel.digits' => 'Veuillez entrer un numéro de téléphone de 10 chiffres ',
            'lieu.required' => 'Le champ lieu est requis',
            'lieu.max' => 'Le champ lieu doit contenitr au maximum 45 caractères',
            'nom_prenom_med.required' => 'Nom complet du medecin est requis',
            'nom_prenom_med.max' => 'Le champ nom et prénom du medecin doit contenir au maximum 75 caractères',
            'tel_med.required' => 'Veuillez entrer votre numéro de téléphone du medecin svp',
            'tel_med.digits' => 'Veuillez entrer un numéro de téléphone de 10 chiffres ',
            'specialite_med.required' => 'Veuillez entrer la spécialité du medecin ',
            'specialite_med.max' => 'La spécialité du medecin doit contenir au maximum 37 caractères ',
            'vaccin.required' => 'Veuillez entrer le nom du vaccin ',
            'vaccin.max' => 'max 22 caractères pour le champ nom du vaccin ',
        ];
        $this->validate($request, $rules, $customMessages);

        // Insertion dans la bdd

        $now = date('Y-m-d');
        $user = Auth::user()->email;

      
        $patient = new Patient;
        $patient->nom_patient = $request->nom_patient;
        $patient->prenom_patient = $request->prenom_patient;
        $patient->adresse = $request->adresse;
        $patient->tel = $request->tel;
        $patient->nee = $request->nee;
        $patient->lieu = $request->lieu;
        $patient->date = $now;
        $patient->nom_prenom_med = $request->nom_prenom_med;
        $patient->tel_med = $request->tel_med;
        $patient->specialite_med = $request->specialite_med;
        $patient->vaccin = $request->vaccin;
        $patient->email_user = $user;
        $patient->code_patient=uniqid('P19_');
        $patient->save();

        return back()->with('success', 'Patient enregistré avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id_patient
     * @return \Illuminate\Http\Response
     */
    public function show($id_patient)
    {

        $patient = Patient::findOrFail($id_patient);
        $var = "Nom et prenom: $patient->nom_patient $patient->prenom_patient,\n Date de naissance :$patient->nee \n Vaccin: $patient->vaccin,\n Derniere vaccination: $patient->updated_at, \n Etat vaccination: TERMINER";
        $qrcode = QrCode::size(200)->generate("$var");

        return view('patient.pdf',compact('patient','qrcode'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id_patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id_patient)
    {
        $patient = Patient::findOrFail($id_patient);
        return view('patient.photo',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id_patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_patient)
    {
        $image = $request->image_patient;

        $images = substr($image, 0, -1);

        Patient::where('id_patient', $id_patient)->update(['image_patient' => $images]);

        return redirect('/patient')->with('success', 'Photo du patient enregistré avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
