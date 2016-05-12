<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    //
     protected $primaryKey = 'land_id';
    protected $fillable = [
        'name' ,'location' , 'province_id','amphur_id','tambol_id','area_num','price','printplatetype','desc','parcel_no','land_no','utmmap','survey_no','googlemap','image_path','province_name','amphur_name','tambol_name','contact_name','contact_tel'
    ];
    
     public function landnears()
    {
        return $this->hasMany('App\Landnear' , 'land_id');
    }
    public function landpictures()
    {
        return $this->hasMany('App\Landpicture' , 'land_id');
    }
}

