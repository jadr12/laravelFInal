@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Modifcation de l'utilisateur</h1>
@stop

@section('content')
    
<form action="{{ route('user.update',['id'=>$user->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
              <label for="">Nom</label>
              @if($errors->has('name'))
              @foreach($errors->get('name')as $error)
              <div class="text-danger">{{ $errors->first('name') }}</div>
              @endforeach
              @endif
              <input type="text"
                class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{ old('name',$user->name) }}">
        </div>
         <div class="form-group">
           <label for="">Prénom</label>
           @if($errors->has('firstname'))
           @foreach($error->get('firstname')as $error)
           <div class="text-danger">{{ $errors->first('firstname') }}</div>
           <input type="text"
             class="form-control" name="firstname" id="" aria-describedby="helpId" placeholder="" value="{{ old('firstname',$user->firstname) }}">
           </div>
        <div class="form-group">
             <label for="">Email</label>
             @if($errors->has('email'))
             @foreach($errors->get('firstname') as $error)
             <div class="text-danger">{{ $errors->first('email') }}</div>
             <input type="text"
               class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{ old('email',$user->email) }}">
        </div>
        <div class="form-group">
               <label for="">Mot de passe</label>
               @if($errors->has('password'))
               @foreach($errors->get('password')as $error)
               <div class="text-danger">{{ $errors->first('password') }}</div>
               <input type="text"
                 class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" value="{{ old('password',$user->password) }}">
               
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@stop