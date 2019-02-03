@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Les roles des utilisateurs</h1>
@stop

@section('content')
    
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Role</th>
        <th scope="col">Bouton</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allroles as $item)
            
        
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name}}</td>
        <td>
                <a href="{{ route('role.show', ['id' =>$item->id]) }}"><button type="button" class="btn btn-primary bouton">Show</button></a>
                <a href="{{ route('role.edit', ['id' =>$item->id]) }}"> <button type="button" class="btn btn-success">Edit</button></a>
                <form style="display: inline;" action="{{ route('role.destroy', ['user' =>$item->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger bouton">Delete</button>
                </td>
      </tr>
    </tbody>
    @endforeach
  </table>
@stop