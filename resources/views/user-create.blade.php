@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Creation d'un nouvel utilisateur</h1>
@stop

@section('content')
    <form action="{{ route('user.store') }}" method="POST">
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
           <label for="">Prénom</label>
           @if($errors->has('firstname'))
           @foreach ($errors->get('firstname') as $error)
           <div class='texte-danger'>{{ $errors->first('firstname') }}</div>
             @endforeach
             @endif
           <input type="text"
             class="form-control" name="firstname" id="" aria-describedby="helpId" placeholder="">
           </div>
        <div class="form-group">
             <label for="">Email</label>
              @if($errors->has('email'))
              @foreach ($error ->get('email')as $error)
               <div class="text-danger">{{ $errors->first('email') }}</div>   
              @endforeach
              @endif
             <input type="text"
               class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
        </div>
        <div class="form-group">
               <label for="">Mot de passe</label>
              @if($errors->has('password'))
              @foreach ($error->get('password')as $error)
               <div class="text-danger">{{ $errors->first('password') }}</div>   
              @endforeach
              @endif
               <input type="text"
                 class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
               
        </div>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@stop