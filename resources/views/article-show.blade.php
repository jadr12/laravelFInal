@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Visualisation de l'article</h1>
@stop

@section('content')
<div class="card col-4" style="width: 18rem;">
        <img class="card-img-top" src="{{ $article->image}}">
            <div class="card-body">
            <h5 class="card-title text-green">{{ $article->name}}</h5>
            <p class="card-text text-primary">{{$article->description}}</p>
            <a href="{{$article->site}}" class="btn btn-primary">Go website</a>
            </div>
        </div>
    
@stop