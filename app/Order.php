<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table="order";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_order','id_user','status'
    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $casts = [

    ];
    //
}
