<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingDetail extends Model
{
    protected $table = 'shipping_details';

    protected $fillable = ['icon','title','subtitle','description'];
}
