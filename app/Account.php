<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //

    /**
     * @var array
     * These fields can be mass assigned
     */
    protected $fillable = [
      'id_number','fname','lname','phone',
        'email','position','jobdescription','region_id',

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * accounts are categorised according to regions
     */
    public function account(){

        return $this->belongsTo('App\Region');
    }
}


