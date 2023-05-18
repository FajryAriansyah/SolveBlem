@extends('layouts.navigation')
@section('container')
    <div class="black-container" style="background-color:#1A1A1B; clip-path: polygon(0 0, 100% 0, 100% 87%, 0% 100%);">
        
        <div class="content-landing container">
            <h1 class="title-landing" style="color: white">
                Biarkan skillmu yang berbicara
            </h1>
            <button class="btn-mulai">
                <a href="{{ url('') }}" class="mulai-coding" style="color: white">Mulai Coding</a>
            </button>
            <div class="services-content" style="margin-top:3rem;">
                <div class="landing-left-content landing-left-content-one">
                    <p style="padding-bottom:5rem;margin-top:7rem;color: white;">Membantu mengasah analisis dan problem solving mulai dari tahap pemula
                        hingga mahir</p>
                </div>
                <div class="landing-right-content" style="border-left: 1px solid white;">
                    <p style="color: white; padding-left: 1.5rem; padding-top:1.3rem;">Menyediakan lebih dari 300.000 soal untuk problem solving</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="services-content">
            <div class="landing-left-content landing-left-content-two">
                
                <p style="color: white; margin-top: 5rem;">Membantu pengajar membuat dan memeriksa soal otomatis dengan local contest</p>
            </div>
            <div class="landing-right-content">
                <p style="color: white; padding-left: 1.5rem;">Menyediakan local contest untuk siapa saja ingin berkompetisi lokal</p>
                <p style="color: white; margin-top:7.3rem; margin-bottom: 1rem; padding-left: 1.5rem;">Tersebar keseluruh Indonesia dan bisa diakses di mana saja</p>
            </div>
        </div>
    </div>
   
@endsection

