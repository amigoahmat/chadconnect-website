<x-app-layout>
    @extends('adminlayout.app')
    @section('content')
        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Actualités</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Actualités</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <div class="col-sm-12">
                <div class="mb-3 d-flex justify-content-end">
                  <a href="{{route('actualite.create')}}" class="btn  btn-block btn-primary mx-5 " >Nouveau</a>
                </div>
              </div>

            <section class="section">
                <div class="row align-items-top">
                    @foreach ($actualites as $actualite)
                    <!-- Card with an image on left -->
                    <div class="card mb-3">

                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ route('actualites.show', $actualite->slug) }}">
                                        <img src="{{ asset('images/actualites/' . $actualite->image) }}"
                                            class="img-fluid rounded-start" alt="...">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="{{ route('actualites.show', $actualite->slug) }}">
                                            <h5 class="card-title">{{ $actualite->titre }}</h5>
                                        </a>
                                        <div class="col-lg-5 d-flex flex-column justify-content-center">
                                            <a href="{{ route('actualites.show', $actualite->slug) }}">
                                                <p>{{ substr($actualite->description, 0, 200) }}...</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="mb-3">
                        <a href='{{ route('actualites.edit', $actualite->id) }}'
                            class="btn  btn-block btn-outline-warning ">Modifier</a>
                        <a class='btn btn-block btn-outline-danger' href='#' role='button'
                            onClick="deleteActualite({{ $actualite->id }});">Supprimer</a>

                        <form action="{{ route('actualites.destroy', $actualite->id) }}" method="post"
                            id="delete-{{ $actualite->id }}">
                            @csrf
                            @method('delete')

                        </form>


                    </div>
               @endforeach
            </section>

        </main><!-- End #main -->


    </x-app-layout>
@endsection

<script>
    function deleteActualite(id) {
        if (confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')) {
            document.getElementById('delete-' + id).submit();
        }
    }
</script>
