@extends('layout.app')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
      <li><a href="{{route('acceuil.index')}}">Acceuil</a></li>

          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-map"></i>
                <h3>Notre Adresse</h3>
                <p>BP : 5880 | N'Djamena | Sabanguali</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-envelope"></i>
                <h3>Notre E-mail</h3>
                <p>contact@cogimex-td.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
              <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-telephone"></i>
                <h3>Appellez Nous</h3>
                <p>66 19 14 14 / 60 00 01 16</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="row gy-4 mt-1">

            <div class="col-lg-6 ">
              <iframe             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.3389141102666!2d15.068647175040502!3d12.088934933615041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x111961a27ea8bd4d%3A0x669578f2ba8e500b!2sRadisson%20Blu%20Hotel%2C%20N&#39;Djamena!5e0!3m2!1sfr!2std!4v1705571906573!5m2!1sfr!2std"
                frameborder="0"
              style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div><!-- End Google Maps -->


            <div class="col-lg-6">
              <form action="{{ route('contacts.store') }}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="row gy-4">
                  <div class="col-lg-6 form-group">
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre non complet" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
                  </div>
                </div><br><br>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Votre message" required></textarea>
                </div><br><br>

                <div class="text-center"><button type="submit">Soumettre</button></div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>
      </section><!-- End Contact Section -->


</main>
@endsection
