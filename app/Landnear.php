<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landnear extends Model
{
    //
    protected $primaryKey = 'landnear_id';
    protected $fillable = [
        'name' , 'distance' , 'land_id'
    ];
     public function land()
    {
        return $this->belongsTo('App\Land', 'land_id'  );
    }
}
