@extends('layouts.app')

@section('title')   
	Project Edit
@endsection

@section('content')
<div class="container">
    <div class="col-md-8">
        <form class="form-horizontal" role="form" method="post" action="{{route('project.update', $project->id)}}">
            {{method_field("PUT")}}
            {{csrf_field()}}
            <div class="form-group">
                <label for="Project Name">Project Name</label>
                <div>
                    <input type="text" class="form-control" name="name" id="name" value="{{$project->name}}" />
                </div>
            </div>
             <div class="form-group">
                <label for="Project Description">Project Description</label>
                <div>
                    <textarea name="description" class="form-control" id="description" rows="" />{{$project->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="Created">Created</label>
                <div>
                    <input type="text" class="form-control" name="created_at" id="created_at"  value="{{$project->created_at}}" />
                </div>
            </div>
            <div class="form-group">
             <button type="submit" class="btn btn-success">Update</button>
             </div>
        </form>
    </div>

</div>
@endsection
