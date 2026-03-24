@extends('layout.app')
@section('content')

<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Services</h2>
      <ol>
        <li><a href="{{route('acceuil.index')}}">Acceuil</a></li>
        <li>Services</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->



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
          </section><!-- End Constructions Section --><br>

      <!-- ======= Our Projects Section ======= -->
      <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Nos projets realisés</h2>
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

@endsection
