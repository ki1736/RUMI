@extends('layouts.app')

@section('title')
    Task List
@endsection

@section('content')
    <div class="container">
        <div class="col-md-12">
            <p>
                <a href="{{route('task.create', $project_id)}}" class="btn btn-success">Create</a>
            </p>
            @if(Session::has('message'))
                <div class="alert alert-info">{{Session::get('session')}}</div>
            @endif
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Project</th>
                    <th>Create</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task -> name}}</td>
                        <td>{{$task -> description}}</td>
                        <td><a href="{{route("project.show", $task -> project_id)}}">{{$task -> project ->name}}</a></td>
                        <td>{{$task -> created_at}}</td>
                        <td><a href="{{route('task.edit',$task -> id)}}" class="btn btn-info">Edit</a></td>
                        <td>
                            <a href="{{route('task.destroy',$task->id)}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

    </div>
@endsection
