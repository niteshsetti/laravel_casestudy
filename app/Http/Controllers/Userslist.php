<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mails;

class Userslist extends Controller
{
    public function register(Request $request)
    {
        $validate = $request->validate([
            'fullname' => "required",
            'email' => "required|email",
            'mobile' => "required",
            'password' => "required|min:6",
            'superadmin' => "required"
        ]);
        if ($validate) {
            $table = new Users;
            $table->Name = $request->fullname;
            $table->Email = $request->email;
            $table->Mobile = $request->mobile;
            $table->Password = md5($request->password);
            $table->Superadmin = $request->superadmin;
            $duplicate_email = Users::where('Email', '=', $table->Email)->first();
            $duplicate_mobile = Users::where('Mobile', '=', $table->Mobile)->first();
            if ($duplicate_email != null) {
                return redirect('register')->with('error', 'Email Already Exists !!! ');
            }
            if ($duplicate_mobile != null) {
                return redirect('register')->with('error', 'Mobile Number Already Exists !!! ');
            } else {
                $table->save();
                $name = $table->Name;
                $to = $table->Email;
                $data = array(
                    'body' => 'Hello' . $name . 'Your Blog Account Created Successfully'
                );
                Mail::to($to)->send(new Mails($data));
                return redirect('register')->with('status', 'Your Account Created Successfully');
            }
        }
    }
}
