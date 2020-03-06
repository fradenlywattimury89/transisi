@extends('layouts.app')

@section('content')

<div class="div container">
<section class="content">
        <div class="container-fluid">
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="" name="nama" value="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="" name="email" value="">
                </div>
                <div class="form-group">
                    <label for="company"> Company </label> <br>
                        <select class="custom-select" name="company" id="company">
                            @foreach($company as $c)
                                <option value='{{ $c-> nama }}'>{{ $c-> nama }}</option>
                            @endforeach
                        </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/employe" class="btn btn-danger"> Cancel </a>
            </form>
        </div><!-- /.container-fluid -->
    </section>    
</div>
@endsection
