
@extends('layout.app')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url::to('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Actualité</h2>
        <ol>
            <li><a href="{{route('acceuil.index')}}">Acceuil</a></li>

          <li>Actualités</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{ asset('images/actualites/' . $actualite->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{$actualite->titre}}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$actualite->editeur}}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{$actualite->created_at}}</time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                    {!! nl2br(e($actualite->description)) !!}
                 </p>

              </div><!-- End post content -->


            </article><!-- End blog post -->
        </div>

      </div>
      </div>
    </section><!-- End Blog Details Section -->

<main>



@endsection

