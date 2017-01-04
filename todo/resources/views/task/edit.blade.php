@extends('layouts.app')

@section('title')
    Task Edit
@endsection

@section('content')
<div class="container">
    <div class="col-md-8">
        <form class="form-horizontal" role="form" method="post" action="{{route('task.update', $task->id)}}">
            {{method_field("PUT")}}
            {{csrf_field()}}
            <div class="form-group">
                <label for="Task Name">Task Name</label>
                <div>
                    <input type="text" class="form-control" name="name" id="name" value="{{$task->name}}" />
                </div>
            </div>
             <div class="form-group">
                <label for="Task Description">Task Description</label>
                <div>
                    <textarea name="description" class="form-control" id="description" rows="" />{{$task->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="Created">Created</label>
                <div>
                    <input type="text" class="form-control" name="created_at" id="created_at"  value="{{$task->created_at}}" />
                </div>
            </div>
            <div class="form-group">
             <button type="submit" class="btn btn-success">Update</button>
             </div>
        </form>
    </div>

</div>
@endsection
