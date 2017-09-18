<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='categories';
    protected $fillable=['title','description','picture','category_id'];
    
    public function books(){
        return $this->belongsto(Category::class,'category_id');
    }
    //
}
