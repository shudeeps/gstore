<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public $fillable=['name','email','phone','address','wordno','image_file'];

    public function orders(){
    	return $this->hasMany('App\order');  
    }
}
