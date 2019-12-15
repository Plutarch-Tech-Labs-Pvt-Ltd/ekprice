<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table = "subcategories";
    protected $primaryKey = 'subcat_id';
    protected $fillable = ['subcat_title','is_active','cat_id','label_id','cat_title'];

    public function parent()
    {
        return $this->belongsTo('App\Categories', 'id');
    }

    public function children()
    {
        return $this->hasMany('App\Categories', 'id');
    }
}
