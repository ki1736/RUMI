<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

    //task만 보여지는 부분 (all)
    public function all()
    {

    }


    //project id 따라가도록

    public function index($id)
    {
        $data['tasks'] = Task::where('project_id', $id)->get();
        $data['project_id'] = $id;

        //$date['task'] = Project::where('user_id', $user->id)->get();
        // $date['user'] = Project::where('user_id', $user->id)->get();
//        dd($data['tasks']);
        return view('task.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $data['project_id'] = $id;
        return view('task.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       dd($request->all());
//        $project = \App\Project::find(1);
        $task = new Task();
        $task->name = $request -> name;
        $task->description = $request -> description;
        $task->project_id= $request -> project_id;
        $task->save();

        return redirect('/task/list/'.$request->project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['task']=Task::findOrFail($id);

        if($data['task']==null) abort(404, $id."Model has not found");
        return view('task.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //데이타 준비
        $data['task'] = Task::findOrFail($id);
        //화면로딩 +데이타
        return view('task.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $task = Task::findOrFail($id);
        $task -> name = $request->name;
        $task -> description = $request->description;
        $task->save();
//        dd($task->project_id);
        /* $project->update([
             'name'=>$request->name,
             'description'=>$request->description
         ]);*/

        return redirect('/task/list/'.$task->project_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task= Task::findOrFail($id);
        $task->delete();


        return redirect('/task/list/'.$task->project_id);
    }
}
