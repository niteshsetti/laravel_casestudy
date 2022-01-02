<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Approve extends Controller
{
    public function updates($id)
    {
        $result = DB::update("update userposts set Status=? where Postid=?", ['Published', $id]);
        if ($result) {
            return redirect('/adduser');
        }
    }
    public function deupdate($id)
    {
        $result = DB::update("update userposts set Status=? where Postid=?", ['Pending', $id]);
        if ($result) {
            return redirect('/adduser');
        }
    }
}
