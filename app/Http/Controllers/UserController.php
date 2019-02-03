<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;

class UserController extends Controller
{
    public function index(){
        $all=User::all();
        return view ('user',compact('all'));
    }

    public function create(){

        return view('user-create');
    }

    public function store(StoreUser $request){
        
        $newuser = new User;
        $newuser->name=$request->name;
        $newuser->firstname=$request->firstname;
        $newuser->email=$request->email;
        $newuser->password=$request->password;
        $newuser->save();

        return view ('home');

    }
    public function show($id){
        $user=user::where('id',$id)->first();
        return view ('user-show',compact('user'));
    }
    public function edit($id){
        $user=user::where('id', $id)->first();
        return view ('user-edit',compact('user'));
    }
    public function update(UpdateUser $request ,$id){
        $user = user::find($id);
       //$user = new User;
        $user->name=$request->name;
        $user->firstname=$request->firstname;
        $user->email=$request->email;
        $user->save();

        return view('home');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->back();
    }
}
