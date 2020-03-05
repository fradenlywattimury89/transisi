@extends('layouts.app')

@section('content')

<div class="div container">
<section class="content">
        <div class="container-fluid">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="" name="" value="">
                </div>
                <div class="form-group">
                    <label for="nim">Email</label>
                    <input type="text" class="form-control" id="" name="" value="">
                </div>
                <div class="form-group">
                    <label for="email"> Logo </label> <br>
                    <input type="file" id="" name="" value="">
                </div>
                <div class="form-group">
                    <label for="jurusan">Website</label>
                    <input type="text" class="form-control" id="" name="" value="">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/company" class="btn btn-danger"> Cancel </a>
            </form>
        </div><!-- /.container-fluid -->
    </section>    
</div>
@endsection
