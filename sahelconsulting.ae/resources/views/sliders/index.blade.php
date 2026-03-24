<x-app-layout>
    @extends('adminlayout.app')
    @section('content')


    <main id="main" class="main">



        <div class="pagetitle">
          <h1>Carousel</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Carousel</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
        <div class="col-sm-12">
            <div class="mb-3 d-flex justify-content-end">
              <a href="{{route('sliders.create')}}" class="btn  btn-block btn-primary mx-5 " >Nouveau</a>
            </div>
          </div>
<br>
<br>
<br>
<br>
    <section class="section">
        <div class="row justify-content-center">
          <div class="col-lg-6">

            <div class="card ">
              <div class="card-body ">
                @foreach($sliders as $slider)

                <!-- Slides only carousel -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{url('images/sliders/'.$slider -> image)}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="mb-3">
                      <a href='{{route('sliders.edit', $slider->id)}}' class="btn  btn-block btn-outline-warning " >Modifier</a>
                      <a class='btn btn-block btn-outline-danger' href='#'  role='button' onClick="deleteSlider({{$slider ->id}});">Supprimer</a>

                                        <form action="{{route('sliders.destroy', $slider ->id)}}" method="post" id="delete-{{$slider->id}}">
                                        @csrf
                                                    @method('delete')

                                       </form>


                    </div>
                  </div>
            </div>
                </div>
                    @endforeach
              </div>
            </div>



          </div>
        </div>
      </section>

    </main><!-- End #main -->


    <script>
        function deleteSlider(id) {
            if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
                document.getElementById('delete-' + id).submit();
            }
        }
    </script>


    </x-app-layout>
@endsection
