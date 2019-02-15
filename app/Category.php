<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $fillable=[
   'title','image'
   ];


protected $table='categories';
   public function product(){
        return $this->hasMany('App\product');
    }
}
