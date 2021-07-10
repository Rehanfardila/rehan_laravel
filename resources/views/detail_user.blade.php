@extends('template')

@section('content')
<br>
<br>
<br>
<br>

<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header" style="background-color: aqua">
            <center>
                <h3>Profil User</h3>
            </center>
        </div>

        <div class="card-body" style="background-color: gold">

            <div class="row ml-2">
                <h4 class="col-4">Nama</h4>
                <h4 class="col-4">: {{$users->name}}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Role</h4>
                <h4 class="col-4">: {{$users->role}}</h4>
            </div>
            <div class="row ml-2">
                <h4 class="col-4">Nama</h4>
                <h4 class="col-8">: {{$users->email}}</h4>
            </div>
            <br>
            <div class="col ml-1">
                <a href="{{route ('users.index')}}" class="btn btn-info">Kembali</a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection