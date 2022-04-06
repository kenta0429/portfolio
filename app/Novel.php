<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Novel extends Model
{
    protected $guarded = array('id');

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

    //user_id
    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
