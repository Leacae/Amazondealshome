<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{

    public function activity(Request $request){
        dump($request->all());
    }
    public function upload(Request $request){
        if ($request->hasFile('file')) {
            $upload=$request->file('file');
            if ($upload->isValid()){
                $name=bcrypt($upload->getClientOriginalName()).'.'.$upload->getClientOriginalExtension();
                $file=$request->file('file')->move('uploads',$name);
                if($file){
                    return [
                        'state'=>true,
                        'name'=>$file->getFilename(),
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
