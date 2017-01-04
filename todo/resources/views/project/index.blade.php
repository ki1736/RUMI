@extends('layouts.app')

@section('title')   
	Project List
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <p>
        	<a href="{{route('project.create')}}" class="btn btn-success">Create</a>
        </p>
        @if(Session::has('message'))
        	<div class="alert alert-info">{{Session::get('session')}}</div>
        @endif
        <table class="table table-striped">
        	<thead>
        		<tr>
        			<th>Name</th>
        			<th>Description</th>
        			<th>Create</th>
        			<th></th>
        			<th></th>
        		</tr>
        	</thead>
        	<tbody>
        	 @foreach($projects as $project)
        		<tr>
        			<td><a href="{{route("project.show", $project -> id)}}">{{$project -> name}}</a></td>
        			<td>{{$project -> description}}</td>
        			<td>{{$project -> created_at}}</td>
        			<td><a href="{{route('project.edit',$project -> id)}}" class="btn btn-info">Edit</a></td>
        			<td>
        				<form class="form-horizontal" role="form" method="POST" action="{{route('project.destroy',$project->id)}}">
        				 {{method_field("DELETE")}}
            			 {{csrf_field()}}
        				<button type="submit" class="btn btn-danger">Delete</button>        					
        				</form>
        			</td>
        		</tr>
        	@endforeach
        	</tbody>
        	
        </table>
    </div>

</div>
@endsection
