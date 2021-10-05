<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'chapter_name' => 'required',
        'subtitle' => 'required',
        'novel_id' => 'required',
        'content' => 'required',
    );
}
