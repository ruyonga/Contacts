<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //

    /**
     * @return mixed
     * Regiion has many accounts
     */
   public function regions(){

       return $this->hanMany('App\Account') ;
   }
}
