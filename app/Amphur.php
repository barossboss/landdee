<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amphur extends Model
{
    //
     protected $primaryKey = 'amphur_id';
     protected $fillable = [
        'amphur_name' , 'province_id'
    ];
      public function province()
    {
        return $this->belongsTo('App\Province', 'province_id'  );
    }
}
