<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Main;
use App\Navigation; // model
use App\Image; // model
use App\Content; // model

class MainController extends Controller
{
    public function index()
    {

        $response['navigations'] = Navigation::all();

        $response['contents_main'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','main')->take(3)->get();

        $response['contents_contractor'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','contractor')->take(3)->get();

        $response['contents_services'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','services')->take(3)->get();

//       $response['contents_projects'] = Content::join('images', 'contents.id', '=', 'images.content_id')
//            ->where('contents.type','=','projects')->take(3)->get();

        $response['contents_news'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','news')->take(3)->get();

        $response['contents_testimonia'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','testimonia')->take(1)->get();

        $response['contents_no_text'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','no_text')->take(6)->get();

        $response['contents_info'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','info')->take(4)->get();

        $response['contents_social'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','social')->take(5)->get();

        return view('view.home',$response);
    }

}
