@extends('layouts.navigator')

@section('title', 'Portofolio | FugoCreative')

@section('head')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">

<style>
    .portofolio-hero {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start; /* konten di kiri */
        padding-left: 10%;       /* jarak dari kiri */
        background: url('{{ asset("img/portfolio-bg.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        color: white;
    }

    .portofolio-hero h1 {
    font-family: 'Poppins', sans-serif;
    font-size: 100px;
    font-weight: 900;
    text-transform: uppercase;
    margin-bottom: 30px;
    text-shadow: 2px 2px 10px rgba(0,0,0,0.5);

    opacity: 0;
    transform: translateX(-100px); /* mulai dari kiri */
    animation: slideInLeft 1.5s ease-out forwards; /* efek muncul */
}

@keyframes slideInLeft {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

    .portofolio-hero .btn-more {
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
    font-size: 20px;
    padding: 12px 30px;
    border-radius: 50px;
    background-color: #44B486;
    color: white;
    transition: 0.3s;

    opacity: 0;
    transform: translateX(-50px);
    animation: slideInButton 1.5s ease-out forwards;
    animation-delay: 1.5s; /* delay setelah h1 muncul */
}

@keyframes slideInButton {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}


    .portofolio-hero .btn-more:hover {
        background-color: #2d7f5b;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="portofolio-hero">
    <h1>Portofolio</h1>
    <a href="#more-projects" class="btn btn-more">More Project</a>
</div>

<section id="our-projects" class="container py-5">
    <h2 class="text-start mb-4" style="font-family: 'Poppins', sans-serif ;">Our Projects</h2>
    
    <div class="row g-4">
        <div class="col-md-4 col-sm-6">
            <div class="project-item">
                <img src="{{ asset('img/visabri.jpg') }}" alt="Project 1" class="img-fluid w-100 project-img">
                <p class="mt-2 text-center" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Deskripsi singkat project 1</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="project-item">
                <img src="{{ asset('img/qlola.jpg') }}" alt="Project 2" class="img-fluid w-100 project-img">
                <p class="mt-2 text-center" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Deskripsi singkat project 2</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="project-item">
                <img src="{{ asset('img/Jarambah.jpg') }}" alt="Project 3" class="img-fluid w-100 project-img">
                <p class="mt-2 text-center" style="font-family: 'Poppins', sans-serif; font-weight: 500;">Deskripsi singkat project 3</p>
            </div>
        </div>
    </div>
</section>

<style>
.project-img {
    width: 200%;
    aspect-ratio: 1 / 1; /* membuat kotak sempurna */
    object-fit: cover;    /* memastikan gambar menutupi kotak */
    border-radius: 10px;  /* opsional, biar agak rounded */
}

/* Responsive untuk layar kecil */
@media (max-width: 768px) {
    .project-img {
        aspect-ratio: 1 / 1;
    }
}
</style>

{{-- Footer --}}
    @include('layouts.footer')


@endsection
