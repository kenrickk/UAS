<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery_fee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'delivery_fees';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dikirim_ke', 'ongkir', 'estimasi_tiba'];

    
}
