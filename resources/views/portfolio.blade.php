
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      @foreach ($portfolio1 as $portfolio1)
      <h2>{{ $portfolio1->head }}</h2>
      <p>{{ $portfolio1->description }}</p>
      @endforeach
    </header>


    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/p-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Hospital management system</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/p-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" 
              title="The system help users make appointment to doctors in the hospital"><i class="bi bi-plus"></i></a>
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/p-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
           
            <div class="portfolio-links">
              <a href="assets/img/portfolio/p-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>

            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/p-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 2</h4>
           
            <div class="portfolio-links">
              <a href="assets/img/portfolio/p-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>

            </div>
          </div>
        </div>
      </div>

    

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/p-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 2</h4>
           
            <div class="portfolio-links">
              <a href="assets/img/portfolio/p-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/p-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/p-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>

            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/p-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <div class="portfolio-links">
              <a href="assets/img/portfolio/p-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>

            </div>
          </div>
        </div>
      </div>



      
    </div>

  </div>

</section>