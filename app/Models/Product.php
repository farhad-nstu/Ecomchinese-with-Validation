<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Get Category
    public function category(){
       return $this->belongsTo('App\Models\Category','cat_id');
    }

    //Get Brand 
    public function brand(){
        return $this->belongsTo('App\Models\Brand','brand_id');
    }

    
}
