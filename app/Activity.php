<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable=[
        'name','email','order_id','order_date','order_screenshot'
    ];
}
