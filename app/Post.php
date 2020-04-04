<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  

  
  protected $tables='reviews';


    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
