<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landpicture extends Model
{
    //
    protected $primaryKey = 'landpicture_id';
    protected $fillable = [
        'path' , 'land_id'
    ];
     public function land()
    {
        return $this->belongsTo('App\Land', 'land_id'  );
    }
}
