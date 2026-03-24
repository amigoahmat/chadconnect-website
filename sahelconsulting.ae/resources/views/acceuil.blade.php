
@extends('layout.app')
@section('content')

<body>



    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Bienvenue a <span><br>Sahel Consulting</span></h2>
              <a data-aos="fade-up" data-aos-delay="200" href="{{route('apropos.index')}}" class="btn-get-started">Apropos</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
        @foreach ($sliders as $slider)
            <div class="carousel-item @if ($loop->first) active @endif" style="background-image: url('{{ asset('images/sliders/'.$slider->image) }}')"></div>
        @endforeach
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- End Hero Section -->

    <main id="main">

             <!-- ======= Alt Services Section ======= -->
      <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up"><br><br>
            @foreach ($aproposs as $apropo)
            <div class="section-header">
                <h2>{{$apropo->titre}}</h2>
              </div>

          <div class="row justify-content-around gy-4">

        <div class="col-lg-6 img-bg @if ($loop->first) active @endif" style="background-image: url('{{ asset('images/apropos1/'.$apropo->image) }}')" data-aos="zoom-in" data-aos-delay="100"></div>

        <div class="col-lg-5 d-flex flex-column justify-content-center">
            <p>{!! nl2br(e($apropo->description)) !!}</p>
        </div>

          </div>

        </div>
        @endforeach
      </section><!-- End Alt Services Section -->


          <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">
            <div class="section-header"><br><br><br>
                <h2>Nos realisations</h2>
              </div>

          <div class="row gy-4">
            @foreach($realisations as $realisation)

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="{{$realisation->nombre}}" data-purecounter-duration="1" class="purecounter"></span>
                <p>{{$realisation->titre}}</p>
              </div>
            </div><!-- End Stats Item -->
            @endforeach
          </div>

        </div>
    </section><!-- End Stats Counter Section -->

           <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Nos services</h2>
          </div>

          <div class="row gy-4">
            @foreach ($services as $service)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="row">
                  <div class="col-xl-5">
                    <div class="card-bg" style="background-image: url('{{ asset('images/services/'.$service->image) }}');"></div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-center">
                    <div class="card-body">
                      <h4 class="card-title">{{$service->titre}}</h4>
                            <p >{!! nl2br(e($service->description)) !!}</p>

                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card Item -->
            @endforeach

        </div>

        </div>
      </section><!-- End Constructions Section -->



      <!-- ======= Our Projects Section ======= -->
      <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Nos projets</h2>
          </div>

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($projets as $projet)



                    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                      <div class="portfolio-content h-100">
                        <img src="{{ asset('images/projets/'.$projet->image1) }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <p>{{$projet->titre}}</p>
                          <ul>
                          <a href="{{ asset('images/projets/' . $projet->image1) }}" title="{{$projet -> titre}}" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="{{ asset('images/projets/' . $projet->image2) }}" title="{{$projet -> titre}}" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="{{ asset('images/projets/' . $projet->image3) }}" title="{{$projet -> titre}}" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="{{ asset('images/projets/' . $projet->image4) }}" title="{{$projet -> titre}}" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                          <a href="{{ route('projets.show', $projet->id) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>

                        </ul>
                        </div>
                      </div>
                    </div><!-- End Projects Item -->
                    @endforeach
              </div>

            </div><!-- End Projects Container -->

          </div>

        </div>
      </section><!-- End Our Projects Section -->


      <section id="team" class="team">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Notre équipes</h2>
          </div>

          <div class="row gy-5">
            @foreach ($equipes as $equipe)



            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('images/equipes/'.$equipe->image) }}" class="img-fluid" alt="">
                <div class="social">
                    <a href="{{ $equipe->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="{{ $equipe->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $equipe->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $equipe->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info text-center">
                <h4>{{ $equipe->nom }}</h4>
                <span>{{ $equipe->post }}</span>
              </div>
            </div><!-- End Team Member -->
            @endforeach
          </div>

        </div>
      </section><!-- End Our Team Section -->



      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">



    <div class=" section-header">
          <h2>Nos actualites</h2>
        </div>

        <div class="row gy-5">
            @foreach ($actualites as $actualite)


          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <a href="{{ route('actualites.show', $actualite->slug) }}">
                <img src="{{ asset('images/actualites/' . $actualite->image) }}" class="img-fluid" alt="">
                <span class="post-date">{{ $actualite->created_at }}</span>
            </a>
              </div>

              <div class="post-content d-flex flex-column">

                <a href="{{ route('actualites.show', $actualite->slug) }}">
                    <h3 class="card-title">{{ $actualite->titre }}</h3>
                </a>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <a href="{{ route('actualites.show', $actualite->slug) }}">
                    <i class="bi bi-person"></i> <span class="ps-2">{{ $actualite->editeur }}</span>
                </a>
                </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <a href="{{ route('actualites.show', $actualite->slug) }}">
                    <i class="bi bi-folder2"></i> <span class="ps-2">{{ $actualite->categorie }}</span>
                </a>
                </div>
                </div>

                <hr>

                <a href="{{ route('actualites.show', $actualite->slug) }}" class="readmore stretched-link"><span>Voir plus</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post item -->
          @endforeach


        </div>

        </div>
      </section>
      <!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>


  </body>


@endsection
