<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcOrigen extends Model
{
    //
    protected $table = 'ec_origens';

    protected $fillable = ['desc', 'pais', 'url'];

    public $timestamps = false;
    //protected $hidden = ['created_at', 'updated_at'];

    //protected $incrementing = false;
}
