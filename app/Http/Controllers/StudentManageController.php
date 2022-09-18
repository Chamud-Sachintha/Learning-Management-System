<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class StudentManageController extends Controller
{
    function checkAuthCredential(){
        if(Session::exists('member')){
            if(Session::get('member')['member_role'] == 'Admin'){
                return view('student_mgmt');
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
