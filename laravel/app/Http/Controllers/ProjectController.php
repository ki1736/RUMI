<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navigation;
use App\Image; // model
use App\Content; // model
class ProjectController extends Controller
{
    public function index()
    {

        $response['navigations'] = Navigation::all();

        $response['contents_info'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','info')->take(4)->get();

        $response['contents_social'] = Content::leftjoin('images', 'contents.id', '=', 'images.content_id')
            ->where('contents.type','=','social')->take(5)->get();

        return view('view.project',$response);
    }

}
