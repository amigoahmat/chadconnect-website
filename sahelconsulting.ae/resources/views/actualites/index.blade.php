
@extends('layout.app')
@section('content')


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
          <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Actualités</h2>
            <ol>
          <li><a href="{{route('acceuil.index')}}">Acceuil</a></li>

              <li>Actualités</li>
            </ol>

          </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 posts-list">
                @foreach ($actualites as $actualite )


              <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100">

                  <div class="post-img position-relative overflow-hidden">
                    <img  src="{{ asset('images/actualites/' . $actualite->image) }}" class="img-fluid" alt="">
                    <span class="post-date">{{$actualite->created_at}}</span>
                  </div>

                  <div class="post-content d-flex flex-column">

                    <h3 class="post-title"> {{$actualite->titre}}</h3>

                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2">{{$actualite->editeur}}</span>
                      </div>
                      <span class="px-3 text-black-50">/</span>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-folder2"></i> <span class="ps-2">{{$actualite->categorie}}</span>
                      </div>
                    </div>

                    <a href="{{ route('actualites.show', $actualite->slug) }}">
                        <p>{{ substr($actualite->description, 0, 200) }}...</p>
                    </a>

                    <hr>


                <a href="{{ route('actualites.show', $actualite->slug) }}" class="readmore stretched-link"><span>Voir plus</span><i class="bi bi-arrow-right"></i></a>

                  </div>

                </div>
              </div><!-- End post list item -->
              @endforeach
            </div><!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                {{ $actualites->links() }}
              </ul>
            </div><!-- End blog pagination -->

          </div>
        </section><!-- End Blog Section -->

      </main><!-- End #main -->



  </main><!-- End #main -->
@endsection
