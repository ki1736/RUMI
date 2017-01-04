<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function param($id=0, $arg='argument'){
        return ['id'=>$id, 'arg'=>$arg];
    }

    public function postParam(Request $request){
        return $request->all();
    }
}
