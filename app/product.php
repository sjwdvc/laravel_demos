<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
