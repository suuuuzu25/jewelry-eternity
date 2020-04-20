<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'date' => 'required',
        'body' => 'required',
    );
}
