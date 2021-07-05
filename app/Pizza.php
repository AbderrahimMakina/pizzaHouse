<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
 protected $casts=[

    'toppings'=> 'array'
 ];
 
 
    //protected $table = 'some_name' ; to connect it to a table ! 
}
