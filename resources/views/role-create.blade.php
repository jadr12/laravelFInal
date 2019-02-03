@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Définir un rôle</h1>
@stop

@section('content')
<form action="{{ route('role.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="">Role</label>
      @if($errors->has('nrole'))
      @foreach($errors->get('nrole') as $error)
      <div class="text-danger">{{ $errors->first('nrole') }}</div>
      @endforeach
      @endif
      <input type="text"
        class="form-control" name="nrole" id="" aria-describedby="helpId" placeholder="">
      
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
</form>
@stop