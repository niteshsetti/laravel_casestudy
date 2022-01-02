<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Forgetpassword extends Controller
{
    public function Forgetpassword(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'newpassword' => 'required|min:6'
        ]);
        if ($validate) {
            $email = $request->email;
            $password = md5($request->newpassword);
            $sql = DB::select('select * from blog_users where Email = ?', [$email]);
            if ($sql) {
                $update = DB::update('update blog_users set Password=? where Email=?', [$password, $email]);
                if ($update) {
                    return redirect('/forget')->with('status', 'Password Updated Successfully !!! ');
                } else {
                    return redirect('/forget')->with('error', 'Email not Found !!! ');
                }
            } else {
                return redirect('/forget')->with('error', 'Email not Found !!! ');
            }
        }
    }
}
