<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   protected $fillable=[
   'pro_code','category_id','pro_name','pro_price','pro_image','pro_qty'
   ];

   public function category(){
   	return $this->belongsTo('App\Category');
   }
}
