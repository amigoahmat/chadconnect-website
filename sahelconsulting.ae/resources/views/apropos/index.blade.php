@extends('layout.app')
@section('content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>A Propos</h2>
        <ol>
          <li><a href="{{route('acceuil.index')}}">Acceuil</a></li>
          <li>Apropos</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->


       <!-- ======= Alt Services Section ======= -->
       <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-around gy-4">
            @foreach ($directeurs as $directeur)

            @endforeach
            <div class="col-lg-6 img-bg" style="background-image: url('{{ asset('images/directeurs/'.$directeur->image) }}');" data-aos="zoom-in" data-aos-delay="100"></div>

            <div class="col-lg-5 d-flex flex-column justify-content-center">
              <h3>Mot du Directeur General</h3>

              <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                    <p >{!! nl2br(e($directeur->description)) !!}</p>
                 </div>
              </div><!-- End Icon Box -->


            </div>
          </div>

        </div>
      </section><!-- End Alt Services Section -->

        <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
        <div class="container" data-aos="fade-up">
            @foreach ($apropos as $apropo)


          <ul class="nav nav-tabs row  g-2 d-flex">

            <li class="nav-item col-3">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>NOTRE HISTOIRE </h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>NOTRE EXPERTISE </h4>
              </a><!-- End tab nav item -->

            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>NOTRE VISION</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-3">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>NOTRE APPROCHE </h4>
              </a>
            </li><!-- End tab nav item -->

          </ul>

          <div class="tab-content">

            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">

                  <p style="font-size: 20px" class="fst-italic">

                 {!! nl2br(e($apropo->histoire)) !!}
                </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                  <img src="{{ asset('images/apropos/'.$apropo->imageh) }}" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">

                  <p style="font-size: 20px" class="fst-italic">
                    {!! nl2br(e($apropo->expertise)) !!}
                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ asset('images/apropos/'.$apropo->imagee) }}" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                  <p style="font-size: 20px" class="fst-italic">
                    {!! nl2br(e($apropo->vision)) !!}
                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ asset('images/apropos/'.$apropo->imagev) }}" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">

                  <p style="font-size: 20px" class="fst-italic">
                    {!! nl2br(e($apropo->approche)) !!}

                  </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                  <img src="{{ asset('images/apropos/'.$apropo->imagea) }}" alt="" class="img-fluid">
                </div>
              </div>
            </div><!-- End tab content item -->

          </div>

          @endforeach
        </div>
      </section><!-- End Features Section -->


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



   </main>
@endsection
