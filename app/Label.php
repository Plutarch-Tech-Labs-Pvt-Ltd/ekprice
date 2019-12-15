<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $table = 'label';
    protected $primaryKey = 'label_id';
    protected $fillable = ['label_title','l_active_status','cat_id'];
    
    public function getSubCategory()
    {
        return $this->hasMany('App\SubCategories','label_id','label_id');
    }
}
