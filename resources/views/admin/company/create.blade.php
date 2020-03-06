@extends('layouts.app')

@section('content')

<div class="div container">
<section class="content">
        <div class="container-fluid">
            <form method="post" action="/create_company/upload" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="" name="nama" value="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="logo"> Logo </label> <br>
                    <input type="file" id="logo" name="logo" value="">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" id="" name="website" value="">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/company" class="btn btn-danger"> Cancel </a>
            </form>
        </div><!-- /.container-fluid -->
    </section>    
</div>
@endsection
