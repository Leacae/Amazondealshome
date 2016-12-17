<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    /**
     * Appliction Home
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function  index(){
        $checkIp=$this->checkEveryDayIpNumber();
        return view('index',[
            'checkIp'=>$checkIp
        ]);
    }

    /**
     * Activity
     *
     * @param Request $request
     * @return array
     */
    public function activity(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:activitys,email',
            'order_id' => 'required|unique:activitys,order_id',
            'order_date' => 'required',
            'order_screenshot' => 'required',
        ]);
        if ($validator->fails()) {
            return [
                'state'=>false,
                'info' =>$validator->errors()->first()
            ];
        }
        $flag=$this->checkEveryDayIpNumber();
        if($flag){
            return [
                'state'=>false,
                'info' =>'Please subscribe and we will keep you updated!5000'
            ];
        }
        $activity=Activity::create(array_add($request->all(),'ip',$request->ip()));
        if($activity){
            return [
                'state'=>true
            ];
        }else{
            return [
                'state'=>false,
                'info' =>'Please subscribe and we will keep you updated!'
            ];
        }


    }

    /**
     * Check Every Day Ip Number
     *
     * @param int $number
     * @return bool
     */
    private function checkEveryDayIpNumber($number=500){
        $count=Activity::whereBetween('created_at',
            [Carbon::today(),Carbon::tomorrow()])
            ->count();
        if($count>=$number){
            return true;
        }
        return false;
    }

    /**
     * Image Upload
     *
     * @param Request $request
     * @return array
     */
    public function upload(Request $request){
        if ($request->hasFile('file')) {
            $upload=$request->file('file');
            if ($upload->isValid()){
                $name=bcrypt($upload->getClientOriginalName()).'.'.$upload->getClientOriginalExtension();
                $file=$request->file('file')->move('uploads',$name);
                if($file){
                    return [
                        'state'=>true,
                        'path'=>$file->getPathname()
                    ];
                }
            }
        }
        return [
            'state'=>false
        ];
    }

    /**
     * Email subscribe
     *
     * @param Request $request
     * @return mixed
     */
    public function subscribe(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribes,email',
        ]);
        if ($validator->fails()) {
            return [
                'state'=>false,
                'info' =>$validator->errors()->first()
            ];
        }
        $subscribe=Subscribe::create($request->only('email'));
        if($subscribe){
            return [
                'state'=>true,
            ];
        }else{
            return [
                'state'=>false,
                'info' =>'Oops! Something went wrong!'
            ];
        }
    }
}
