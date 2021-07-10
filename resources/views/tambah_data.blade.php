@extends('template')

@section('content')
<br>
<br>
<br>

<body style="background-color: aqua">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Tambah Data</h3>
                </center>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <ul class="list-group">
                        Nama<input type="text" name="name" required>
                        Role<input type="text" name="role" required>
                        Email<input type="text" name="email" required>
                        Password<input type="text" name="password" required>
                    </ul>
                    <br>
                    <input type="submit" value="Tambah Data" class="btn btn-warning">
                    <a href="{{route ('users.index')}}" class="btn btn-info">Kembali</a>
            </div>
            </form>
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
<br>
<br>
<br>
<br>

@endsection