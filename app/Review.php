<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	  public function review(){
	        return $this->hasMany('App\Review','product_id')->with('user_id')->latest()->limit(5)->get()->reverse();
	}
	public function user()
    {
        //ничего не принимает но возвращает  все товары данной категории
        return $this->belongsTo('App\User');
    }
    public function product()
    {
        //ничего не принимает но возвращает  все товары данной категории
        return $this->belongsTo('App\Product');
    }
}
