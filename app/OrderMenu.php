<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMenu extends Model
{
    protected $table="ordermenu";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_order_menu','id_menu',
    'id_order','qty'
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
