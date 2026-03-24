<x-app-layout>
    @extends('adminlayout.app')
    @section('content')
<main id="main">



    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">
        <div class="col-sm-12">
            <div class="mb-3 d-flex justify-content-end">
                <a href="{{route('project.create')}}" class="btn btn-block btn-primary mx-5">Nouveau</a>
            </div>
        </div>

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($projets as $projet)



            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                <h3>{{$projet->titre}}<h3>
              <div class="portfolio-content h-100">

                <img src="{{ asset('images/projets/'.$projet->image1) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <p>{{$projet->titre}}</p>
u                   <ul>
                  <a href="{{ asset('images/projets/' . $projet->image1) }}" title="{{$projet -> titre}}"  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ asset('images/projets/' . $projet->image2) }}" title="{{$projet -> titre}}"  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ asset('images/projets/' . $projet->image3) }}" title="{{$projet -> titre}}"  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ asset('images/projets/' . $projet->image4) }}" title="{{$projet -> titre}}"  class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </ul>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="mb-3">
                <a href='{{route('projets.edit', $projet->id)}}'
                    class="btn  btn-block btn-outline-warning ">Modifier</a>
                <a class='btn btn-block btn-outline-danger' href='#' role='button'
                    onClick="deleteProjet({{$projet ->id}});">Supprimer</a>

                <form action="{{route('projets.destroy', $projet ->id)}}" method="post"
                    id="delete-{{$projet->id}}">
                    @csrf
                    @method('delete')

                </form>


            </div>
            @endforeach
      </div>

      <div class="blog-pagination">
        <ul class="justify-content-center">
          {{ $projets->links() }}
        </ul>
      </div>
    </section><!-- End Our Projects Section -->

  </main><!-- End #main -->


</x-app-layout>
@endsection

<script>
    function deleteProjet(id) {
        if (confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')) {
            document.getElementById('delete-' + id).submit();
        }
    }
    </script>
