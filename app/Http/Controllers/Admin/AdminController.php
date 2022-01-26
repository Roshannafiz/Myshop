<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Session;
session_start();

class AdminController extends Controller
{
    public function dashboard()
    {
        $this->Admin_Auth_Check();
        return view('admin.dashboard');
    }

    // Check User Login Or Not
    public function Admin_Auth_Check()
    {
        $admin_id = Session::get('id');
        if($admin_id){
            return;
        }else{
            return redirect('/admins')->with('error_message', "Login Then Countinue!")->send();
        }
    }
}
