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
    
    <a href="company/create_company" class="btn btn-primary"> Add Data Company</a>

  </nav>
 
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Logo</th>
            <th scope="col">Website</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($company as $c)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $c->nama }}</td>
            <td>{{ $c->email }}</td>
            
            
            <td><img src="{{ asset(Storage::url( $c->logo )) }}" width="100px" hegth="100px" alt="image"></td>

            <td>{{ $c->website }}</td>
            <td>
                <form action="/company/{{ $c->id_company }}">
                    <a href="/company/{{ $c->id_company }}/edit" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button href="/company/{{ $c->id_company }}" class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>

</div>

@endsection