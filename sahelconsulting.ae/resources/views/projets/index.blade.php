@extends('layout.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Projects</h2>
        <ol>
            <li><a href="{{route('acceuil.index')}}">Acceuil</a></li>

          <li>Projects</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">


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
      <div class="blog-pagination">
        <ul class="justify-content-center">
          {{ $projets->links() }}
        </ul>
      </div><!-- End blog pagination -->
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->
@endsection
