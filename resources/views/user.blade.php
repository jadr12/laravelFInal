@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Tableau des utilisateurs</h1>
@stop

@section('content')
    <p>Les utilisateurs</p>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Firstname</th>
            <th scope="col">Email</th>
            <th scope="col">Button</th>
            
          </tr>
        </thead>
        @foreach ($all as $item)
    <tbody>
          <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->firstname }}</td>
            <td>{{ $item->email }}</td>
            <td>

                <a href="{{ route('user.show', ['id' =>$item->id]) }}"><button type="button" class="btn btn-primary bouton">Show</button></a>
                @can('update',$item)
                <a href="{{ route('user.edit', ['id' =>$item->id]) }}"> <button type="button" class="btn btn-success">Edit</button></a>
                @endcan
                @can('admin')
                <form style="display: inline;" action="{{ route('user.destroy', ['user' =>$item->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger bouton">Delete</button>
                </form>
                @endcan
            </td>
            </tr>
          
        </tbody>
@endforeach
      </table>

@stop