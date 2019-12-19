<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    protected $table = "sellers";
    protected $fillable = ['seller_id', 'user_id', 'display_name', 'profile', 'education','average_response_time','seller_type','country_id','state_id','city_id','individual_describes_you','individual_about_yourself','individual_skill','language1','language2','language3','company_name','num_years_business','company_technologies','gstin','about_company_service','is_approved','status'];
    protected $primaryKey = 'id';
}
