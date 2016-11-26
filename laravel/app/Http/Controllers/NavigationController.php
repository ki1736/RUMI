<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Navigation;
use App\Content;

class NavigationController extends Controller
{

    protected $commonList;

    public function __construct()
    {

        $this->commonList['navigations'] = Navigation::where('status', '=', 'published')->get();

        $this->commonList['contents_info'] = Content::where('type', '=', 'info')->get();

        $this->commonList['contents_social'] = Content::where('type', '=', 'social')->get();

        $this->commonList['navigation_list'] = Navigation::all();


    }

    public function index()
    {

        return view('view.navigation', $this->commonList);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {

        //dd($this);
        $role=[
            'name' => 'required|unique:navigations|max:50',
            'slug' => 'required|unique:navigations|max:50',
        ];


        $validator = \Validator::make($request->all(), $role);
        if ($validator->fails()) {    //validate에 에러가 있을시에 fails가 true로 발생함.
            return redirect('/navigation')->withErrors($validator)->withInput(); //에러 발생시 다시 redirect로 이전화면으로 돌려줌
        }

        if ($request->id) {
            $navigation = Navigation::find($request->id);    //request객체 중 id값이 있을 경우 데이터베이스에서 조회해온 뒤 객체를 만듬 - update를 위함.
        } else {
            $navigation = new Navigation();                                                //없을 시에 객체를 새로 생성하여 사용함. - insert
            $navigation->order = count($this->commonList['navigation_list']);

        }

        $navigation->name = $request->name;
        $navigation->slug = $request->slug;
        $navigation->status = $request->status == null ? 'unpublished' : 'published';
        $navigation->save();

        $this->commonList['navigation_list'] = Navigation::all();

        return view('view.navigation',$this->commonList);


    }

//    public function destroy($id)
//    {
//
//
//        $navigation= Navigation::find(id);
//        $navigation->delete();
//        return redirect()->route('view.navigation')
//            ->with('success','Item deleted successfully');
//    }






}


