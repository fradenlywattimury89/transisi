@extends('layouts.app')

@section('content')


@include('layouts.sidebar')


<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif        
<div class="row justify-content-center">


<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
    
    <a href="/employe/create_employe" class="btn btn-primary" id="menu-toggle"> Add Data Employe</a>

  </nav>
 
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Company</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employe as $e)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $e->id_employe }}</td>
            <td>{{ $e->nama }}</td>
            <td>{{ $e->email }}</td>
            <td>{{ $e->company->nama }}</td>
            <td>
                <form action="/employe/{{ $e->id_employe }}">
                    <a href="/employe/{{ $e->id_employe }}/edit" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button href="/employe/{{ $e->id_employe }}" class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>

</div>


@endsection