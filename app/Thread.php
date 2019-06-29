<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'threads';
    public $primaryKey  = 'id';


    public function user(){
        return $this->belongsTo('App\User');
    }
}
