<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'name' => 'required',
        'email' => 'required',
        'body' => 'required',
    );
}
