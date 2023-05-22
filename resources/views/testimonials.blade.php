<section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        @foreach ($testmonial1 as $testmonial1)
        <h2>{{ $testmonial1->head }}</h2>
        <p>{{ $testmonial1->description }}</p> 
        @endforeach
      </header>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

       @foreach ($testmonial as $testmonial)
       <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            {{ $testmonial->paragraph }}
          </p>
          <div class="profile mt-auto">
            <img src="testmonialimg/{{ $testmonial->image }}" class="testimonial-img" alt="">
            <h3>{{ $testmonial->name }}</h3>
            <h4>{{ $testmonial->professional }}</h4>
          </div>
        </div>
      </div>
       @endforeach
        <!-- End testimonial item -->

         

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section>