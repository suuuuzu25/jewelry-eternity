<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
// protected $table = 'create_works_table';
protected $guarded = array('id');
public static $rules = array(
'title' => 'required',
'description' => 'required',
'image_path' => 'required',
);
}
