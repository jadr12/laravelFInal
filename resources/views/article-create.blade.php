@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Creation d'articles</h1>
@stop

@section('content')

<form action="{{route( 'article.store') }} " method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Nom de l'articles</label>
      @if($errors->has('name'))
      @foreach($errors->get('name') as $error)
      <div class="text-danger">{{ $errors->first('name') }}</div>
      @endforeach
      @endif
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
      
    </div>
    <div class="form-group">
      <label for="">Description de l'article</label>
      @if($errors->has('description'))
      @foreach($errors->get('description') as $error)
      <div class="text-danger">{{ $errors->first('description') }}</div>
      @endforeach
      @endif
      <textarea class="form-control" name="description" id="" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="">Web site</label>
      @if($errors->has('site'))
      @foreach($errors->get('site') as $error)
      <div class="text-danger">{{ $errors->first('site') }}</div>
      @endforeach
      @endif
      <input type="text"
        class="form-control" name="site" id="" aria-describedby="helpId" placeholder="">
       </div><br><br>

       <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          

       <button class="btn btn-success" type="submit">Submit</button>
    
    </form>

@stop