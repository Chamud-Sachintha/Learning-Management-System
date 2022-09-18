<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Student;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    function regiserStudentDetails(Request $studentDetails){
        $MEMBER_ROLE = "Student";
        $table = new Student;

        if($studentDetails->paswd == $studentDetails->con_paswd){
            $table->full_name = $studentDetails->full_name;
            $table->email_address = $studentDetails->email;
            $table->password = Hash::make($studentDetails->paswd);
            $table->member_role = $MEMBER_ROLE;

            $table->save();

            Session()->flash('status', 'Registration Successfully.');
            return Redirect::to('/');
        }else{
            Session()->flash('status', 'Check The Password Correctly.');
            return Redirect::to('/');
        }
    }

    function loginPortal(Request $loginDetails){
        $student_result = Student::where(['email_address'=>$loginDetails->email])->first();
        $admin_result = Admin::where(['email'=>$loginDetails->email])->first();

        if($student_result){
            if(!Hash::check($loginDetails->paswd, $student_result->password)){
                Session()->flash('status', 'Incorrect Username Or Password');
                return redirect('/');
            }else{
                Session::put('member', $student_result);
                return redirect('/payment');
            }
        }else if($admin_result){
            if(!Hash::check($loginDetails->paswd,$admin_result->password)){
                Session()->flash('status', 'Incorrect Username Or Password');
                return redirect('/');
            }else{
                Session::put('member', $admin_result);
                return redirect('/dashboard');
            }
        }else{
            Session()->flash('status', 'Incorrect Username Or Password');
            return redirect('/');
        }
    }

    function showProfilePage(){
        if(Session()->has('member')){
            return view('/Profile/profile');
        }else{
            Session()->flash('status', 'Please Login Before Access Profile Page.');
            return redirect('/');
        }
    }

    function logOutStudent(){
        Session()->forget('member');
        Session()->flash('status', 'Logout Successfully.');

        return redirect('/');
    }
}
