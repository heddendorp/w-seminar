@extends('base.layout') 

@section('head')
<title>Modify-Mod</title>
@stop 
@section('nav')
<li>
    <a href="{{URL::to('concept/layout')}}">Home</a>
</li>
<li>
    <a href="{{URL::to('mod/browse')}}">Browse Mods</a>
</li>
<li>
    <a href="{{URL::to('cp')}}">Control Panel</a>
</li>
<li class="active">
    <a>Modify Mod</a>
</li>
@stop 
@section('content')
@if(!$error)
<h1>{{$mod["name"]}}
    <small>by {{$mod["author"]}}</small>
</h1>
@endif
<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#home" data-toggle="tab">Home</a>
    </li>
    <li>
        <a href="#profile" data-toggle="tab">Versions</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="home">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="panel-title">Modify your Mod</h3>
                        <hr>
                        @if ($error)
                        @include('mod.formError')
                        @else
                        @include('mod.formModify')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop