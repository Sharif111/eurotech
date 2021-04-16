<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\User;
use Hash;

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
        return view('home');
    }

    public function NewUser(){
        return view('admin.user.user_add');
    }
    public function NewUserStore(Request $r){
        if($r->password != $r->password_confirmation){
            return redirect('user/create')->with('success','Password not matched');
        }
        $pass = Hash::make($r->password);
        $istore = User::create([
            'name'=>$r->username,
            'email'=>$r->email,
            'password'=> $pass,
            'pass_show'=> $r->password,
        ]);
        if($istore){
            return redirect('user/view')->with('success','User Created Successfully');
        }
        else{
            return redirect('user/view')->with('error','User Create Failed!');
        }
    }

    public function UserList(){
        $userList = User::all();
        return view('admin.user.user_list',compact('userList'));
    }
    public function UserEdit($id){
        $editUser = User::find($id);
        return view('admin.user.user_edit',compact('editUser'));
    }
    public function UserUpdate(Request $r){
        if($r->password != $r->password_confirmation){
            return redirect('user/create')->with('success','Password not matched');
        }
        $pass = Hash::make($r->password);
        $istore = User::find($r->id)->update([
            'name'=>$r->username,
            'email'=>$r->email,
            'password'=> $pass,
            'pass_show'=> $r->password,
        ]);
        if($istore){
            return redirect('user/view')->with('success','User Created Successfully');
        }
        else{
            return redirect('user/view')->with('error','User Create Failed!');
        }
    }

    public function UserDelete($id){
        $isDelete = User::find($id)->delete();
        if($isDelete){
            return redirect('user/view')->with('success','Data Deleted Successfully');
        }
        else{
            return redirect('user/view')->with('error','Data Delete Failed!');
        }
    }
    
}
