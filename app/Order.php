<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id_user','created_at','updated_at'];
    protected $hidden = ['id_user'];
    protected $casts = [
    ];
    //
}
