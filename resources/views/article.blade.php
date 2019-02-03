@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Articles</h1>
@stop

@section('content')
    
    @foreach ($article as $item)
    <div class="card col-4" style="width: 18rem;">
        <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}">
            <div class="card-body">
            <h5 class="card-title text-green">{{$item->name}}</h5>
            <p class="card-text text-primary">{{$item->description}}</p>
            <a href="{{$item->site}}" class="btn btn-primary">Go website</a>
            </div>
            <a href="{{ route('article.edit', ['id'=>$item->id]) }}"><button class="btn btn-info">Edit</button></a>
        <form action="{{ route('article.destroy', ['article'=>$item->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">delete</button>
        </form>
        <a href="{{ route('article.show', ['id' =>$item->id]) }}" class="btn btn-success">Show</a>
        </div>

        
        
    @endforeach
   
@stop