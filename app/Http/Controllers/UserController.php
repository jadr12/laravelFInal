<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Events\MailEvent;


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
    public function update(Request $request ,$id){
        $all = User::find($id);
       //$user = new User;
        $all->name=$request->name;
        $all->firstname=$request->firstname;
        $all->email=$request->email;
        $all->save();
        $all = User::all();

        return view('user',compact('all'));
    }
    public function destroy($all){
        $all=User::find($all);
        $all->delete();
        return redirect()->back();
    }
    public function mail(Request $request){
        event(new MailEvent($request));

        return redirect()->back();
    }
}
