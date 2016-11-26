<?php
?>

@extends('master')
@section('title')
    CONSTRUCTION
@endsection
@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/navigation.js') }}"></script>
@endsection
@section('content')
    <section class="menu_section">
        <h1>MENU PANEL</h1>
        <div class="col-md-4">
            <form action="/navigation" method="post">
                <input type="hidden" id="id" name="id"/>
                {{--<form action="{{url(/navigation)}}">--}}
                <div class="form-group">
                    <input type="button" id="btn_new"  class="btn btn-info" value="new"/><br><br>
                    <label for="InputName">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    {{--{{($errors->has('name'))? $errors->first('name') : ''}} <br>--}}
                </div>
                <div class="form-group">
                    <label for="InputSlug">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                    {{--{{($errors->has('slug'))? $errors->first('slug') : ''}} <br>--}}
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="status" name="status"/> Publish
                        {{--<input type="hidden" name="_method" value="put">--}}
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                    </label>
                </div>
                <button id="btn_update" type="submit" class="btn btn-default" value="edit">Submit</button>
            </form>

        </div>


        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>TITLE</th>
                    <th>SLUG</th>
                    <th>PUBLISH</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($navigation_list as $nav)
                <tr>
                    <th scope="row" id="tr_order">{{$nav->order}}</th>
                    <td class="hidden" id="tr_id">{{$nav->id}}</td>
                    <td id="tr_name">{{$nav->name}}</td>
                    <td id="tr_slug">{{$nav->slug}}</td>
                    <td id="tr_status">{{$nav->status}}</td>

                </tr>
                @endforeach
                {{--<tr>--}}
                    {{--<th scope="row">2</th>--}}
                    {{--<td>Jacob</td>--}}
                    {{--<td>Thornton</td>--}}
                    {{--<td>@fat</td>--}}
                {{--</tr>--}}
                {{--<tr>--}}
                    {{--<th scope="row">3</th>--}}
                    {{--<td>Larry</td>--}}
                    {{--<td>the Bird</td>--}}
                    {{--<td>@twitter</td>--}}
                {{--</tr>--}}
                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>
@endsection

@section('script')
    <script>
        $(navigation.init());
    </script>
@endsection