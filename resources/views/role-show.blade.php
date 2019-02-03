@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Le role de l'utilisateur</p>
    <table class="table table-bordered table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Role</th>
             
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $role->id }}</th>
                <td>{{ $role->name }}</td>
               
              </tr>
            </tbody>
          </table>
@stop