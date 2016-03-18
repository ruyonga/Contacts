<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
     //all multiple assignment for the following

     protected $fillable = [
         'name',
         'details'
     ];
}
