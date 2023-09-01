<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function user(){
        $users = User::all();
        
       return view('Admin.Users.users_list',compact('users'));
    }
    function user_delete($user_id){
        User::find($user_id)->delete();
        return back()->with('success','User Delete!');
    }
}
