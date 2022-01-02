<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Createuserpost;

class Createpost extends Controller
{
    public function createpost(Request $request)
    {
        $validate = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'created' => 'required'
        ]);
        if ($validate) {
            $userpost = new Createuserpost;
            $userpost->Id = $request->id;
            $userpost->Category = $request->category;
            $userpost->Title = $request->title;
            $userpost->Description = $request->description;
            $userpost->created_by = $request->created;
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . "." . $extension;
                $file->move('uploads/', $filename);
                $userpost->Image = $filename;
            }
            $userpost->Status = 'Pending';
            $userpost->Postid = uniqid();
            $msg = $userpost->save();
            if ($msg) {
                return redirect('/createpost')->with('status', 'Post Created Successfully');
            }
        }
    }
}
