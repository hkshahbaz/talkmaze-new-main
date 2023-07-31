<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscountCodes extends Model
{
    protected $fillable = ['discount_type','discount','code_type','code','valid_through','number_of_use','data_id'];
}
