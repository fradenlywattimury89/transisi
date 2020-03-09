@extends('layouts.app')

@section('content')

<div class="div container">
<section class="content">
        <div class="container-fluid">
            <form method="post" action="/employe/{{ $employe->id_employe }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $employe->nama }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $employe->email }}">
            </div>
            
            <div class="form-group">
                <label for="company"> Company </label> <br>
                    <select class="custom-select" name="company" id="company" value="{{ $employe->company->id_company }}">
                        @foreach($company as $c)
                            <option value='{{ $c->id_company }}'>{{ $c->nama }} </option>
                        @endforeach
                    </select>
            </div>

            <button type="submit" class="btn btn-primary mr-2"> Update </button>
            <a href="/employe" class="btn btn-danger"> Cancel </a>
            </form>

        </div>
    </section>    
</div>
@endsection
