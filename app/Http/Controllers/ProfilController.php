<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfile;
use App\Http\Requests\UpdateProfile;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allprofile=Profil::all();
        return view ('profile',compact('allprofile'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfile $request)
    {
        $newprofile= new Profil;
        $newprofile->adresse=$request->adresse;
        $newprofile->ville=$request->ville;
        $newprofile->cp=$request->cp;
        $newprofile->np=$request->np;
        $newprofile->gsm=$request->gsm;
        $newprofile->gsm2=$request->gsm2;
        $newprofile->fixe=$request->fixe;
        $newprofile->save();
        $profile=Profil::all();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allprofile=Profil::where('id',$id)->first();
        return view ('profil-show',compact('allprofile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allprofile=Profil::where('id', $id)->first();
        return view ('profile-edit',compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfile $request, $id)
    {
        $profile = Profil::find($id);
        $profile->adresse=$request->adresse;
        $profile->ville=$request->ville;
        $profile->cp=$request->cp;
        $profile->np=$request->np;
        $profile->gsm=$request->gsm;
        $profile->gsm2=$request->gsm2;
        $profile->fixe=$request->fixe;
        $profile->save();

        return view('profile',compact('allprofile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($profil)
    {
        $profil = Profil::find($profil);
        $profil->delete();
        return redirect()->back();
    }
}
