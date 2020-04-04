<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table="menu";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_menu','name','menu_type','price',
    'created_at','updated_at'
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
