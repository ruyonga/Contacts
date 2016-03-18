<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //

    protected $fillable = [
      'id_number','fname','lname','phone',
        'email','position','jobdescription',

    ];
}
