<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EcCondicion extends Model
{
    //
    protected $table = 'ec_condicions';

    protected $fillable = ['tipo'];

    public $timestamps = false;
    //protected $hidden = ['created_at', 'updated_at'];

    public $incrementing = false;
}
