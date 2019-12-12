<?php


namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class IdeaController extends Controller
{
    public $successStatus = 200;

    /**
     * add api
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){

         if(DB::table("ideas")->insert(['title' => request('title'),
            'subject' => request('subject'),
            'user_id' => request('user_id')])){

             return response()->json(['success' => "success"], $this-> successStatus);

         }else{
             return response()->json(['error'=>'Unauthorised'], 401);
         }
    }
    public function display(){

        $ideas = DB::table("ideas")->select('id','title','subject','user_id')->get();
        return response()->json(['success' => $ideas ], $this-> successStatus);
    }

}