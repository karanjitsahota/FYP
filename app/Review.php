<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{       
    protected $tables='post';

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    }
