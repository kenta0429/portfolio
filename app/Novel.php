<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'user_id' => 'required',
        'summary' => 'required',
        'is_publish' => 'required',
    );

    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
