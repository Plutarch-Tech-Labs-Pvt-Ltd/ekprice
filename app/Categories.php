<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $table = "categories";
    protected $fillable = ['cat_title','c_active_status'];
    protected $primaryKey = 'cat_id';
    
    public function parent()
    {
        return $this->belongsTo('App\Categories', 'id');
    }

    public function children()
    {
        return $this->hasMany('App\Categories', 'id');
    }

    public function getLable()
    {
        return $this->hasMany('App\Label','cat_id','cat_id');
    }
}
