<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navigation;
use App\Image; // model
use App\Content; // model

class ContactController extends Controller
{
    public function index()
    {

        $response['navigations'] = Navigation::where('status', '=', 'published')->get();

        $response['contents_info'] =Content::where('type', '=', 'info')->get();

        $response['contents_info'] =Content::where('type', '=', 'info')->get();

        $response['contents_social'] =Content::where('type', '=', 'social')->get();

        return view('view.contact',$response);
    }

}
