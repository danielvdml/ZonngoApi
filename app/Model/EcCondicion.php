<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EcCondicion extends Model
{
    //
    protected $table = 'ec_condicions';
    
    protected $fillable = ['tipo'];

    protected $timestamps = false;
    //protected $hidden = ['created_at', 'updated_at'];

    protected $incrementing = false;
}
