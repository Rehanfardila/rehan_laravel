@extends('template')

@section('content')

<body style="background-color: deepskyblue">
    <center>
        <h1 style="background-color: gold">EXCEL ACADEMY</h1>
    </center>
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <center><img src="{{asset('storage/ex1.jpg')}}" alt="Trulli" width="1800" height="800"></center>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <center><img src="{{asset('storage/ex7.png')}}" alt="Trulli" width="1800" height="800"></center>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <center><img src="{{asset('storage/ex6.jpg')}}" alt="Trulli" width="1800" height="800"></center>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>
<br>

<center>
    <h2>Visi Sekolah<h2>
</center>
</center>
<center>
    <h4>Melestarikan Sistem Pendidikan Yang berkualitas<h4>
</center>
<center>
    <h4>Untuk Membangun Potensi Individu Bagi Aspirasi Negara<h4>
</center>



@endsection