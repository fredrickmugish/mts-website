@extends('layouts.web')
@section('content')
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Location</h3>
                <p>Dodoma, Tanzania</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+255 762 521 584<br>+255 733 349 974 </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>fredrickgotfried@gmail.com<br>hellomtstech@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open 24 Hours</h3>
                <p>Monday - Sunday</p>
              </div>
            </div>
          </div>

        </div>



     
        <div class="col-lg-6">


          @if (session()->has('message'))
          <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert"></button>
        {{ session()->get('message')}}
            </div>
          @endif



          <form action="{{ url('/contactupload') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-6 ">
                <input type="text" class="form-control" name="phone" placeholder="Your Phone Number" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>

            </div>
          </form>








          

        </div>

      </div>

    </div>

  </section>
  @endsection