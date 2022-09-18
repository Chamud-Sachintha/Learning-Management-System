<?php

namespace App\Http\Controllers;

use App\Admin;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function CheckAdminAuthLogin(){
        if(Session::exists('member')){
            if(Session::get('member')['member_role'] == 'Admin'){
                return view('home');
            }else{
                Session()->flash('status', 'Cannot Access Admin Panel.');
                return redirect('/');
            }
        }else{
            Session()->flash('status', 'Cannot Access Admin Panel.');
            return redirect('/');
        }
    }
}
