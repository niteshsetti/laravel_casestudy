<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Createuserpost extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'userposts';
    protected $dates = ['deleted_at'];
    protected $fillable = ['Id', 'Category', 'Title', 'Description', 'Image', 'Status', 'Postid', 'created_by'];
}
