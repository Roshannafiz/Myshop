<?php

namespace App\Http\Controllers\Admin\Admin_Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Session;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    // Login Page
    public function index()
    {
        return view('admin/auth-admin/admin_login');
    }

    // Admin-Login To Go Dashboard
    public function show_dashboard(Request $request)
    {
        $admin_email = $request->email;
        $admin_password = md5($request->password);
        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if ($result) {
            Session::put('id', $result->id);
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_email', $result->admin_email);
            Session::put('admin_image', $result->admin_image);
            return redirect('/dashboard');
        } else {
            return redirect('/admins')->with('error_message',"Email Or Password Invalid!");
        }
    }

    // Admin Logout
    public function logout()
    {
        Session::flush();
        return redirect('/admins');
    }
}
