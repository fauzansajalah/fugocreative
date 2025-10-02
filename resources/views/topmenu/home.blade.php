@extends('layouts.navigator')

@section('title', 'Home - FugoCreative')

@section('head')
<style>
/* Hero Section */
.hero-section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
    position: relative;
}

/* Gradient Text */
.gradient-text {
    font-size: 60px;
    font-weight: bold;
    background: linear-gradient(90deg, #44B486, #1abc9c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transform: translate(-100px, -20px);
    opacity: 0;
    animation: slideIn 1.2s forwards;
}

@keyframes slideIn {
    0% {
        transform: translate(-100px, -20px);
        opacity: 0;
    }
    100% {
        transform: translate(0, -20px);
        opacity: 1;
    }
}

/* Carousel Logos */
.carousel-partnership {
    margin: 80px auto;
    max-width: 90%;
}

.carousel-inner {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 60px;
}

.logo-wrapper {
    flex: 0 1 150px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80px;
}

.logo-wrapper img {
    max-height: 100%;
    width: auto;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.logo-wrapper img:hover {
    transform: scale(1.05);
}

/* Statistik Box */
.stats {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 80px;
}

.stat-box {
    background: #fff;
    padding: 25px 35px;
    border-radius: 15px;
    width: 200px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    transition: transform 0.3s ease;
}

.stat-box:hover {
    transform: translateY(-10px);
}

.stat-box h2 {
    font-size: 28px;
    margin: 0;
    color: #44B486;
}

.stat-box p {
    margin-top: 8px;
    font-size: 16px;
    color: #555;
}

/* Introduction Section */
.introduction-section {
    display: flex;
    flex-wrap: wrap;
    background-color: #000;
    color: #fff;
    padding: 60px 10%;
    gap: 40px;
    align-items: center;
}

.intro-text h2 {
    color: #44B486;
    font-size: 48px;
    margin-bottom: 20px;
}

.intro-text p {
    font-size: 18px;
    line-height: 1.8;
    color: #ddd;
}

/* Services Section */
.services-section {
    background-color: #f0f0f0;
    padding: 60px 10%;
    text-align: center;
}

.services-section p {
    font-size: 20px;
    color: #333;
    margin-bottom: 40px;
}

.services-boxes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.service-box {
    background-color: #44B486;
    color: #fff;
    padding: 30px;
    border-radius: 15px;
    flex: 1 1 220px;
    max-width: 250px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.service-box h3 {
    margin-bottom: 10px;
}

.service-box p {
    font-size: 14px;
}
</style>
@endsection

@section('content')

{{-- Hero Section --}}
<div class="hero-section">
    <h1 class="gradient-text">CREATE TO ELEVATE</h1>
</div>

{{-- Carousel + Statistik Box Container --}}
<div class="carousel-stats-container" style="background: #fff; padding: 40px 0; overflow: hidden;">
    {{-- Carousel Logos --}}
    <div class="carousel-viewport" style="overflow: hidden; width: 100%;">
        <div class="carousel-inner" style="display: flex; transition: transform 0.8s ease; width: 200%;">
            @php
                $firstSlideLogos = [
                    ['src' => 'bri.png', 'alt' => 'BRI'],
                    ['src' => 'bca.png', 'alt' => 'BCA'],
                    ['src' => 'kai.png', 'alt' => 'KAI'],
                    ['src' => 'citylink.png', 'alt' => 'Citilink'],
                    ['src' => 'bumn.png', 'alt' => 'BUMN'],
                ];
                $secondSlideLogos = [
                    ['src' => 'logo1.png', 'alt' => 'Logo 1'],
                    ['src' => 'logo2.png', 'alt' => 'Logo 2'],
                    ['src' => 'logo3.png', 'alt' => 'Logo 3'],
                    ['src' => 'logo4.png', 'alt' => 'Logo 4'],
                    ['src' => 'logo5.png', 'alt' => 'Logo 5'],
                ];
            @endphp

            {{-- Slide pertama --}}
            <div class="slide" style="display: flex; justify-content: space-around; flex: 0 0 50%; padding: 0 20px;">
                @foreach($firstSlideLogos as $logo)
                    <div class="logo-wrapper">
                        <img src="{{ asset('img/'.$logo['src']) }}" alt="{{ $logo['alt'] }}">
                    </div>
                @endforeach
            </div>

            {{-- Slide kedua --}}
            <div class="slide" style="display: flex; justify-content: space-around; flex: 0 0 50%; padding: 0 20px;">
                @foreach($secondSlideLogos as $logo)
                    <div class="logo-wrapper">
                        <img src="{{ asset('img/'.$logo['src']) }}" alt="{{ $logo['alt'] }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Statistik Box --}}
    <div class="stats">
        <div class="stat-box">
            <h2>4.7+</h2>
            <p>Ratings</p>
        </div>
        <div class="stat-box">
            <h2>512+</h2>
            <p>Project Complete</p>
        </div>
        <div class="stat-box">
            <h2>100+</h2>
            <p>Clients</p>
        </div>
        <div class="stat-box">
            <h2>8+</h2>
            <p>Years Experience</p>
        </div>
    </div>
</div>

{{-- Auto Slide Script --}}
<script>
    const carouselInner = document.querySelector('.carousel-inner');
    let currentSlide = 0;
    const totalSlides = 2;

    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        carouselInner.style.transform = `translateX(-${currentSlide * 50}%)`;
    }, 3000);
</script>

{{-- Introduction Section --}}
<div class="introduction-section">
    <div class="intro-text">
        <h2>Introduction</h2>
        <p>
            In a world driven by constant change, creativity is the key. At Fugo Creative, we believe in transforming challenges into opportunities through innovative solutions.<br><br>
            Create to Elevate—this mantra fuels our mission to deliver exceptional satisfaction, adapt to evolving trends, collaborate with industry pioneers, and optimize resources to craft solutions that resonate.<br><br>
            Every brand has a story to tell. What’s yours? Let Fugo Creative empower your journey beyond limits.
        </p>
    </div>
    <div class="intro-video">
        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.3);">
            <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1&mute=1&controls=1&loop=1&playlist=YOUR_VIDEO_ID" 
                frameborder="0" 
                allow="autoplay; encrypted-media" 
                allowfullscreen 
                style="position: absolute; top:0; left:0; width:100%; height:100%;">
            </iframe>
        </div>
    </div>
</div>

{{-- Extended Introduction / Services Section --}}
<div class="extended-intro-section" style="display: flex; flex-direction: column; background-color: #000; color: #fff; padding: 60px 10%; gap: 40px;">

    {{-- Headline --}}
    <div class="headline-left" style="flex: 1; max-width: 100%; margin-bottom: 40px;">
        <h2 style="color: #44B486; font-size: 48px; margin-bottom: 20px;">We’ve worked on so many great projects for our clients and we’re proud of every single one.</h2>
    </div>

    {{-- Services Box Container --}}
    <div class="services-boxes" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
        {{-- Service Box 1 --}}
        <div class="service-box" style="background-color: #44B486; color: #fff; padding: 30px; border-radius: 15px; flex: 1 1 220px; max-width: 250px; text-align: center; transition: transform 0.3s ease;">
            <img src="{{ asset('img/logo-service1.png') }}" alt="Fugo Design" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Design</h3>
            <p>[Deskripsi Fugo Design]</p>
        </div>

        {{-- Service Box 2 --}}
        <div class="service-box" style="background-color: #44B486; color: #fff; padding: 30px; border-radius: 15px; flex: 1 1 220px; max-width: 250px; text-align: center; transition: transform 0.3s ease;">
            <img src="{{ asset('img/logo-service2.png') }}" alt="Fugo Production House" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Production House</h3>
            <p>[Deskripsi Fugo Production House]</p>
        </div>

        {{-- Service Box 3 --}}
        <div class="service-box" style="background-color: #44B486; color: #fff; padding: 30px; border-radius: 15px; flex: 1 1 220px; max-width: 250px; text-align: center; transition: transform 0.3s ease;">
            <img src="{{ asset('img/logo-service3.png') }}" alt="Fugo Event Organizer" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Event Organizer</h3>
            <p>[Deskripsi Fugo Event Organizer]</p>
        </div>

        {{-- Service Box 4 --}}
        <div class="service-box" style="background-color: #44B486; color: #fff; padding: 30px; border-radius: 15px; flex: 1 1 220px; max-width: 250px; text-align: center; transition: transform 0.3s ease;">
            <img src="{{ asset('img/logo-service4.png') }}" alt="Fugo Merch Production" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Merch Production</h3>
            <p>[Deskripsi Fugo Merch Production]</p>
        </div>
    </div>
</div>
 
{{-- Background Hitam Panjang --}}
<div class="extended-intro-section" style="display: flex; flex-direction: column; background-color: #000; color: #fff; padding: 60px 10%; gap: 60px;">

    {{-- Headline --}}
    <div class="headline-left">
        <h2 style="color: #44B486; font-size: 48px; margin-bottom: 20px;">We’ve worked on so many great projects for our clients and we’re proud of every single one.</h2>
    </div>

    {{-- Services Box --}}
    <div class="services-boxes" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">
        {{-- Box 1 --}}
        <div class="service-box">
            <img src="{{ asset('img/logo-service1.png') }}" alt="Fugo Design" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Design</h3>
            <p>[Deskripsi Fugo Design]</p>
        </div>
        {{-- Box 2 --}}
        <div class="service-box">
            <img src="{{ asset('img/logo-service2.png') }}" alt="Fugo Production House" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Production House</h3>
            <p>[Deskripsi Fugo Production House]</p>
        </div>
        {{-- Box 3 --}}
        <div class="service-box">
            <img src="{{ asset('img/logo-service3.png') }}" alt="Fugo Event Organizer" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Event Organizer</h3>
            <p>[Deskripsi Fugo Event Organizer]</p>
        </div>
        {{-- Box 4 --}}
        <div class="service-box">
            <img src="{{ asset('img/logo-service4.png') }}" alt="Fugo Merch Production" style="max-width: 80px; margin-bottom: 15px;">
            <h3>Fugo Merch Production</h3>
            <p>[Deskripsi Fugo Merch Production]</p>
        </div>
    </div>
</div>

 {{-- Footer --}}
@include('layouts.footer')

@endsection
