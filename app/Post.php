<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function postExtraDetails() {
        return $this->belongsTo('PostExtraDetails::class');
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }



    protected $fillable = 
    [
        'picture',
        'description',
        'accountName',
        'accountPfp',
        'date',
    ];
}
