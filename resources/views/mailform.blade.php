@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Envoyer un mail</h1>
@stop

@section('content')
<form action="{{route('mailform')}}" method="POST">
    @csrf
    <div class="form-group">
          <label for="">Nom</label>
          @if($errors->has('name'))
          @foreach ($errors->get('name') as  $error)
          <div  class="text-danger">{{  $errors->first('name') }}</div>
          @endforeach
          @endif
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    </div>
          <div class="form-group">
         <label for="">Email</label>
          @if($errors->has('email'))
          @foreach ($errors->get('email') as $error)
           <div class="text-danger">{{ $errors->first('email') }}</div>   
          @endforeach
          @endif
         <input type="text"
           class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
    </div>

<div class="form-group">
<label for="">Profession</label>
@if($errors->has('email'))
@foreach ($errors->get('email') as $error)
 <div class="text-danger">{{ $errors->first('email') }}</div>   
@endforeach
@endif
<input type="text"
 class="form-control" name="profession" id="" aria-describedby="helpId" placeholder="">
</div>
    
    <button class="btn btn-success" type="submit">Submit</button>
</form>
@stop