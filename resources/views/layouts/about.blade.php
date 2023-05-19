@extends('layouts.web')
@section('content')
<section id="about" class="about">
  <br/>
  <br/>
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        @foreach ($about as $about)
      
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>{{ $about->head }}</h3>
            <h2>{{ $about->title }}</h2>
            <p>
              {{ $about->paragraph }}
            </p>
            <div class="text-center text-lg-start">
              <a href="{{ url('/contact') }}" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Connect With Us</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="/aboutimage/{{ $about->image }}" class="img-fluid" alt="">
        </div>
    
        @endforeach
      </div>
    </div>
  </section>
  @endsection