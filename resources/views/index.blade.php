@extends('template')

@section('content')

<body style="background-color: orange">
    <center>
        <h1 style="color: darkblue">Dashboard</h1>
    </center>
    <br>
    <Div class="Container">
        <div class="card my-3">
            <div class="card-body">
                <h3>Data User</h3>
                <br>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $s )
                    <tr>
                        <td>{{$s ->name}}</td>
                        <td>{{$s->role}}</td>
                        <td>{{$s ->email}}</td>
                        <td>
                            <ul class="nav">
                                <a href="{{route ('users.show', $s->id)}}" class="btn btn-success mr-2">Show</a>
                                <a href="{{route ('users.edit', $s->id)}}" class="btn btn-danger mr-2">Edit</a>
                                <form action="{{route ('users.destroy', $s->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">delete</button>

                                </form>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{ route('users.create') }}" class="btn btn-info">Tambah Data</a>
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