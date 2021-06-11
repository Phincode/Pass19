<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Patient;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
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
      //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function compte(Request $request)
    {
        //validation
        $rules = [
            'code' => 'required',
            'name' => 'required|max:30',
            'prenoms' => 'required',
            'contact' => 'required|unique:users|digits:10',
            'password' => 'required|between:8,255|confirmed',
            'password_confirmation' => 'required'
        ];

        $customMessages = [
            'name.required' => 'Veuillez entrer le nom de l\'utilisateur',
            'name.max' => 'Le nom d\'utilisateur ne dois pas depasser 30 caractères',
            'prenoms.required' => 'Veuillez entrer le prenom de l\'utilisateur',
            'contact.required' => 'Veuillez entrer votre numéro de téléphone svp !',
            'contact.digits' => 'Veuillez entrer un numéro de téléphone de 10 chiffres !',
            'password.required' => 'Veuillez entrez un mot de passe ',
            'password_confirmation.required' => 'La confirmation du mot de passe est requis',
        ];

        $this->validate($request, $rules, $customMessages);

        $verif = Patient::where('id_patient', $request->code)->where('nom_patient', $request->name)->count();
        if ($verif == 1) {
            $user = new User;
            $user->name = $request->name;
            $user->prenoms = $request->prenoms;
            $user->contact = $request->contact;
            $user->id_patient = $request->code;
            $user->role = 'US';
            $user->password = Hash::make($request->password);
            $user->save();
            return view('auth.login')->with('danger', 'veuillez entrez vos informations');
        } else {
            return back()->with('danger', 'veuillez verifier vos informations');
        }
    }
}
