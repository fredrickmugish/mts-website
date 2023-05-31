<section id="services" class="services">

    <div class="container" data-aos="fade-up">

     
     
      <header class="section-header">
        @foreach ($service1 as $service1)
        <h2>{{ $service1->head }}</h2>
        <p>{{ $service1->description }}</p>
        @endforeach
      </header>
     
      <div class="row gy-4">
        @foreach ($service as $service)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
          <img src="/serviceimage/{{ $service->image }}" height="100" width="100">
         
            <h3>{{ $service->title }}</h3>
            <p>{{ $service->paragraph }}</p>
            <a href="#" class="read-more"><span>Connect us</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      
   @endforeach
      </div>
     
    </div>
  
  </section>
