@extends('layout.app')
@section('content')


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Project Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Project Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="50">



        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('images/projets/'.$projet->image1) }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/projets/'.$projet->image2) }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/projets/'.$projet->image3) }}" alt="">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('images/projets/'.$projet->image4) }}" alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>{{$projet->titre}}</h2>
              <p>
                {!! nl2br(e($projet->description)) !!}
              </p>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Projet Details Section -->

  </main><!-- End #main -->


  @endsection
