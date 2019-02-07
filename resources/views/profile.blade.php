@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Les profiles</h1>
@stop

@section('content')

<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Adresse</th>
            <th scope="col">Ville</th>
            <th scope="col">Code Postale</th>
            <th scope="col">Nméro de Porte</th>
            <th scope="col">GSM</th>
            <th scope="col">GSM2</th>
            <th scope="col">Telephonne Fixe</th>
          </tr>
        </thead>
        @foreach($allprofile as $item)
        <tbody>
          <tr>
            <th scope="row">{{ $item->adresse }}</th>
            <td>{{ $item->ville }}</td>
            <td>{{ $item->cp }}</td>
            <td>{{ $item->np }}</td>
            <td>{{ $item->gsm }}</td>
            <td>{{ $item->gsm2 }}</td>
            <td>{{ $item->fixe }}</td>
            <td>
                <a href="{{ route('profile.show', ['id' =>$item->id]) }}"><button type="button" class="btn btn-primary bouton">Show</button></a>
                <a href="{{ route('profile.edit', ['id' =>$item->id]) }}"> <button type="button" class="btn btn-success">Edit</button></a>
                <form style="display: inline;" action="{{ route('profile.destroy',['profile' => $item->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger bouton">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
@stop