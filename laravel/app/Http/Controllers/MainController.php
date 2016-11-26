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

        $response['navigations'] = Navigation::where('status', '=', 'published')->get();

        $response['contents_main'] =Content::where('type', '=', 'main')->get();

        $response['contents_contractor'] =Content::where('type', '=', 'contractor')->get();

        $response['contents_service'] =Content::where('type', '=', 'service')->get();

//       $response['contents_projects'] = Content::join('images', 'contents.id', '=', 'images.content_id')
//            ->where('contents.type','=','projects')->take(3)->get();

        $response['contents_news'] =Content::where('type', '=', 'news')->get();

        $response['contents_no_text'] =Content::where('type', '=', 'no_text')->take(1)->get();

        $response['contents_testimonia'] =Content::where('type', '=', 'testimonia')->get();

        $response['contents_info'] =Content::where('type', '=', 'info')->get();

        $response['contents_social'] =Content::where('type', '=', 'social')->get();

        return view('view.home',$response);
    }

}
