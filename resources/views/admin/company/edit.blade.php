@extends('layouts.app')

@section('content')

<div class="div container">
<section class="content">
        <div class="container-fluid">
            <form method="post" action="company/{id}">
            @method('PATCH')
            @csrf
            <div class="form-group"><div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $company->nama }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $company->email }}">
                </div>
                <div class="form-group">
                    <label for="logo"> Logo </label> <br>
                    <input type="file" id="logo" name="logo" value="">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="website" name="website" value="{{ $company->website }}">
                </div>
            <button type="submit" class="btn btn-primary mr-2"> Update </button>
            <a href="/company" class="btn btn-danger"> Cancel </a>
            </form>
        </div><!-- /.container-fluid -->
    </section>    
</div>
@endsection
