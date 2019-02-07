@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Créer un Profil</h1>
@stop

@section('content')
<form action="{{ route('profile.store')}}" method="POST">
    @csrf
<div class="form-group">
  <label for="">Adresse</label>
  @if($errors-> has('adresse'))
  @foreach($errors->get('adresse') as $error)
  <div class="text-danger">{{ $errors->first('adresse') }}</div>
 @endforeach
  @endif 
  <input type="text"
    class="form-control" name="adresse" id="" aria-describedby="helpId" placeholder="">
  
</div>
<div class="form-group">
  <label for="">Ville</label>
  @if($errors-> has('ville'))
  @foreach($errors->get('ville') as $error)
  <div class="text-danger">{{ $errors->first('ville') }}</div>
   @endforeach
    @endif
    <input type="text"
    class="form-control" name="ville" id="" aria-describedby="helpId" placeholder="">
   
</div>
<div class="form-group">
  <label for="">Code Postal</label>
  @if($errors-> has('cp'))
  @foreach($errors->get('cp') as $error)
  <div class="text-danger">{{ $errors->first('cp') }}</div>
  @endforeach
    @endif
    <input type="text"
    class="form-control" name="cp" id="" aria-describedby="helpId" placeholder="">
    
</div>
<div class="form-group">
  <label for="">Numero de porte</label>
  @if($errors-> has('np'))
  @foreach($errors->get('np') as $error)
  <div class="text-danger">{{ $errors->first('np') }}</div>
   @endforeach
    @endif
    <input type="text"
    class="form-control" name="np" id="" aria-describedby="helpId" placeholder="">
   
</div>
<div class="form-group">
  <label for="">Gsm</label>
  @if($errors-> has('gsm'))
  @foreach($errors->get('gsm') as $error)
  <div class="text-danger">{{ $errors->first('gsm') }}</div>
  @endforeach
    @endif
    <input type="text"
    class="form-control" name="gsm" id="" aria-describedby="helpId" placeholder="">
    
</div>
<div class="form-group">
  <label for="">Gsm2</label>
  @if($errors-> has('gsm2'))
  @foreach($errors->get('gsm2') as $error)
  <div class="text-danger">{{ $errors->first('gsm2') }}</div>
  @endforeach
    @endif
    <input type="text"
    class="form-control" name="gsm2" id="" aria-describedby="helpId" placeholder="">
    
</div>
<div class="form-group">
  <label for="">Telephonne Fixe</label>
  @if($errors-> has('fixe'))
  @foreach($errors->get('fixe') as $error)
  <div class="text-danger">{{ $errors->first('fixe') }}</div>
  @endforeach
    @endif
    <input type="text"
    class="form-control" name="fixe" id="" aria-describedby="helpId" placeholder="">
    
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>
@stop