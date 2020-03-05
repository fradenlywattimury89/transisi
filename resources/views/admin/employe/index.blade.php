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
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Company</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
    </table>

</div>

</div>


@endsection