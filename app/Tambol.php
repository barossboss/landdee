<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tambol extends Model
{
    //
     protected $primaryKey = 'tambol_id';
     protected $fillable = [
        'tambol_name' , 'amphur_id' 
    ];
      public function amphur()
    {
        return $this->belongsTo('App\Amphur', 'amphur_id'  );
    }
}
