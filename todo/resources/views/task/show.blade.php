@extends('layouts.app')

@section('title')   
	Task Edit
@endsection

@section('content')
<div class="container">
    <div class="col-md-8">
        <div class="form-group">
            <label for="Task Name">Task Name</label>
            <div>
                <input type="text" class="form-control" name="name" id="name" readonly="true" value="{{$task->name}}" />
            </div>
        </div>
         <div class="form-group">
            <label for="Task Description">Task Description</label>
            <div>
                <textarea name="description" class="form-control" id="description" rows="" readonly="true" />{{$task->description}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="Created">Created</label>
            <div>
                <input type="text" class="form-control" name="created_at" id="created_at" readonly="true" value="{{$task->created_at}}" />
            </div>
        </div>
        <div class="form-group">
            <label for="Updated">Updated</label>
            <div>
                <input type="text" class="form-control" name="updated_at" id="updated_at" readonly="true" value="{{$task->updated_at}}" />
            </div>
        </div>
        <div class="form-group">
         <a href="{{route('project.index')}}" type="submit" class="btn btn-primary">Project List</a>
         <a href="{{route('task.index')}}" type="submit" class="btn btn-success pull-right">Task List</a>
        </div>
    </div>

</div>
@endsection
