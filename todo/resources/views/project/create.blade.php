@extends('layouts.app')

@section('title')   
	Project Edit
@endsection

@section('content')
<div class="container">
    <div class="col-md-8">
     <form class="form-horizontal" role="form" method="post" action="{{route('project.store')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="Project Name">Project Name</label>
            <div>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" />
            </div>
        </div>
         <div class="form-group">
            <label for="Project Description">Project Description</label>
            <div>
                <textarea name="description" class="form-control" id="description" rows="" />{{old('description')}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="Created">Created</label>
            <div>
                <input type="text" class="form-control" name="created_at" id="created_at" value="{{old('created_at')}}" />
            </div>
        </div>
        <div class="form-group">
            <label for="Updated">Updated</label>
            <div>
                <input type="text" class="form-control" name="updated_at" id="updated_at" value="{{old('updated_at')}}" />
            </div>
        </div>
        <div class="form-group">
            <button href="{{route('project.store')}}" type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    </div>
</div>
@endsection
