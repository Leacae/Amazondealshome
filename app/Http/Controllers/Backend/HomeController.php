<?php

namespace App\Http\Controllers\Backend;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request){
        $keyword=$request->input('keyword','');
        $activitys=Activity::where('name','like','%'.$keyword.'%')->paginate(15);
        if(!empty($keyword)){
            $activitys->appends(['keyword' => $keyword]);
        }
        return view('backend.activity',[
            'activitys'=>$activitys,
            'keyword'=>$keyword
        ]);
    }
}
