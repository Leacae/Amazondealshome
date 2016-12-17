<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table='activitys';
    protected $fillable=[
        'name','email','order_id','order_date','order_screenshot','ip'
    ];

    /**
     * Update Activity State
     *
     * @param $id
     * @param $state
     * @return bool
     */
    public function updateState($id,$state){
        $flag=$this->where('id',$id)
            ->update(['state' => $state]);

        return $flag?true:false;
    }
}
