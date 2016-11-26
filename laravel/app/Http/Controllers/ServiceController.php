<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navigation;
use App\Image; // model
use App\Content; // model
class ServiceController extends Controller
{

    public function index()
    {

        $response['navigations'] = Navigation::where('status', '=', 'published')->get();

        $response['contents_main'] =Content::where('type', '=', 'main')->get();

        $response['contents_service'] =Content::where('type', '=', 'service')->get();

        $response['contents_info'] =Content::where('type', '=', 'info')->get();

        $response['contents_social'] =Content::where('type', '=', 'social')->get();

        $response['navigations_title'] =Navigation::where('id', '=', '4')->get();;



        return view('view.service',$response);
    }

}
