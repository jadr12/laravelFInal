@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Renseignement de l'utilisateur</h1>
@stop

@section('content')
<table class="table table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Firstname</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->email }}</td>
          </tr>
        </tbody>
      </table>
   
    
@stop