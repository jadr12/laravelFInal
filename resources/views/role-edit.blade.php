@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Edite le Role de l'utilisateur</p>
    <form action="{{ route('role.update',['id'=>$role->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                  <label for="">Role</label>
                  @if($errors->has('name'))
                    @foreach($errors->get('name') as $error)
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                     @endforeach
                     @endif
                  <input type="text"
                    class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{ old('name',$role->name) }}">
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    
@stop