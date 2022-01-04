<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Logincontroller extends Controller
{
    public function Login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if ($validate) {
            $email = $request->email;
            $password = md5($request->password);
            $name = "";
            $mobile = "";
            $Id = 0;
            $admin = "";
            $sql = DB::select('select *from blog_users where Email = ? and Password = ?', [$email, $password]);
            if ($sql) {
                foreach ($sql as $details) {
                    $name = $details->Name;
                    $mobile = $details->Mobile;
                    $Id = $details->Id;
                    $admin = $details->Superadmin;
                }
                $request->session()->put(['datas' => $name, 'mobiles' => $mobile, 'Id' => $Id, 'Admin' => $admin]);
                $request->session()->put('data', $request->input());
                return redirect('/dashboard')->with('status', 'Login-Success');
            } else {
                return redirect('/login')->with('error', 'Invalid-Credinals');
            }
        }
    }
}
