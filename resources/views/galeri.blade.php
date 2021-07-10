@extends('template')

@section('content')

<body style="background-color: yellow">
    <center>
        <h1 style="color: dodgerblue">FASILITAS KAMPUS</h1>
    </center>
    <center>
        <img src="{{asset('storage/gl.jpg')}}" alt="Trulli" width="" height="172"></center>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/per.jpg')}}" alt="Trulli" width="" height="172">
                    <div class="card-body">
                        <h5 class="card-title">Perpustakaan</h5>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/cl.jpg')}}" alt="Trulli" width="" height="170">
                    <div class="card-body">
                        <h5 class="card-title">Kelas</h5>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/aula.jpg')}}" alt="Trulli" width="" height="170">
                    <div class="card-body">
                        <h5 class="card-title">Aula Olah Raga</h5>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/lap.jpg')}}" alt="Trulli" width="" height="170">
                    <div class="card-body">
                        <h5 class="card-title">Lapangan OlahRaga</h5>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 18rem;">

                    <img src="{{asset('storage/kn.jpg')}}" alt="Trulli" width="" height="175">
                    <div class="card-body">
                        <h5 class="card-title">Kantin</h5>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/aud.jpg')}}" alt="Trulli" width="" height="175">
                    <div class="card-body">
                        <h5 class="card-title">Auditorium</h5>
                    </div>
                </div>
            </div>



            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/lab.jpg')}}" alt="Trulli" width="" height="175">
                    <div class="card-body">
                        <h5 class="card-title">Laboratorium</h5>

                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('storage/st.jpg')}}" alt="Trulli" width="" height="175">
                    <div class="card-body">
                        <h5 class="card-title">Studio Fotografi</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<br>
<br>

@endsection