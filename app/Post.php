<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded  = array('id');

    public static $rules = array (
        'name' => 'required',
        'title' => 'required',
        'message' => 'required',
    );
}
