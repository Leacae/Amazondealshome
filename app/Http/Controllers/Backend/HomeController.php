<?php

namespace App\Http\Controllers\Backend;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class HomeController extends Controller
{
    /**
     * Backend Home
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $keyword=$request->input('keyword','');
        $activitys=Activity::where('name','like','%'.$keyword.'%')->paginate(15);
        if(!empty($keyword)){
            $activitys->appends(['keyword' => $keyword]);
        }
        dump($activitys);
        return view('backend.activity',[
            'activitys'=>$activitys,
            'keyword'=>$keyword
        ]);
    }


    public function updateState(Request $request,Activity $activity){
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:activitys,id',
            'state' => 'required|integer|in:1,2,3',
        ]);

        if (!$validator->fails()) {
            $flag=$activity->updateState($request->input('id'),
                $request->input('state'));
            if($flag){
                return [
                    'state'=>true
                ];
            }else{
                return [
                    'state'=>false
                ];
            }
        }
        return [
            'state'=>false,
            'info' =>$validator->errors()->first()
        ];
    }
}
