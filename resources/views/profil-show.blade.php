@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Montrez le profil</h1>
@stop

@section('content')
<table class="table table-bordered table-dark">
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
        
        <tbody>
          <tr>
            <th scope="row">{{ $allprofile->adresse }}</th>
            <td>{{ $allprofile->ville }}</td>
            <td>{{ $allprofile->cp }}</td>
            <td>{{ $allprofile->np }}</td>
            <td>{{ $allprofile->gsm }}</td>
            <td>{{ $allprofile->gsm2 }}</td>
            <td>{{ $allprofile->fixe }}</td>
          </tr>
        </tbody>
        
      </table>
@stop