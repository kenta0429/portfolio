<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{  
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
    );
}
