<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table="delivery";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_order','id_user','status','kecamatan','address'
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
