@extends('template')

@section('content')

<body style="background-image: image({{asset('storage/r1.png')}}">
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Data User<h2>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', $users->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <ul class="list-group">
                        Nama <input type="text" name="name" required value="{{ $users->name}}">
                        Role <input type="text" name="role" required value="{{ $users->role}}">
                        Email <input type="text" name="email" required value="{{ $users->email}}">
                        Password <input type="text" name="password" required value="{{ $users->password}}">
                    </ul>
                    <br>
                    <div class="row">
                        <div class="col m-1">
                            <input type="submit" value="Edit Data" class="btn btn-warning">
                        </div>
                        <div class="col m-2">
                            <a href="{{route ('users.index')}}" class="btn btn-info">Kembali</a></div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection