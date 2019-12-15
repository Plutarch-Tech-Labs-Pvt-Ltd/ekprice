<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use App\Categories;

class Helper
{
    public static function getData()
    {
        return Categories::with('getLable')->get();
    }

    public static function getSubCategory($lable,$skip)
    {
    	$data = '';
         $data .='<ul class="uk-nav uk-navbar-dropdown-nav">';
         	if($skip == 0){
            	$data .= '<li class="uk-active"><a href="#">'.$lable->label_title.'</a></li>';
         	}

            if(count($lable->getSubCategory) > 0){
                foreach($lable->getSubCategory->skip($skip)->take(5) as $sucategory){
                	$data .= '<li><a href="#">'.$sucategory->subcat_title.'</a></li>';
                }
            }

        $data .= '</ul>';

        return $data;
    }
}