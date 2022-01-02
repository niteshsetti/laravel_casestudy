<?php

namespace App\Http\Controllers;

use App\Models\Createuserpost;

class Delete extends Controller
{
    public function deletes($id)
    {
        $sql = Createuserpost::where('Postid', $id)->delete();
        if ($sql) {
            return redirect('/adduser');
        }
    }
    public function restore($id)
    {
        $sql = Createuserpost::onlyTrashed()->where('Postid', $id)->restore();
        if ($sql) {
            return redirect('/archeive');
        }
    }
    public function permanent($id)
    {
        $sql = Createuserpost::where('Postid', $id)->forceDelete();
        if ($sql) {
            return redirect('/archeive');
        }
    }
    public function restoreAll()
    {
        $sql = Createuserpost::onlyTrashed()->restore();
        if ($sql) {
            return redirect('/archeive');
        }
    }
}
