<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main">

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
              <a href="{{route('apropos.create')}}" class="btn  btn-block btn-primary mx-5 " >Nouveau</a>
            </div>
          </div>

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
             @foreach ($apropos as $apropo)
             <div class="row justify-content-around gy-4">
                <h3>Histoire</h3>
                 <div class="col-lg-6 img-bg @if ($loop->first) active @endif" style="background-image: url('{{ asset('images/apropos/'.$apropo->imageh) }}')" data-aos="zoom-in" data-aos-delay="100"></div>
                 <div class="col-lg-5 d-flex flex-column justify-content-center">
                     <p >{!! nl2br(e($apropo->histoire)) !!}</p>
                 </div>
                 <h3>Expertise</h3>
                 <div class="col-lg-6 img-bg @if ($loop->first) active @endif" style="background-image: url('{{ asset('images/apropos/'.$apropo->imagee) }}')" data-aos="zoom-in" data-aos-delay="100"></div>
                 <div class="col-lg-5 d-flex flex-column justify-content-center">
                     <p >{!! nl2br(e($apropo->expertise)) !!}</p>
                 </div>
                 <h3>Vision</h3>
                 <div class="col-lg-6 img-bg @if ($loop->first) active @endif" style="background-image: url('{{ asset('images/apropos/'.$apropo->imagev) }}')" data-aos="zoom-in" data-aos-delay="100"></div>
                 <div class="col-lg-5 d-flex flex-column justify-content-center">
                     <p >{!! nl2br(e($apropo->vision)) !!}</p>
                 </div>
                 <h3>Approche</h3>
                 <div class="col-lg-6 img-bg @if ($loop->first) active @endif" style="background-image: url('{{ asset('images/apropos/'.$apropo->imagea) }}')" data-aos="zoom-in" data-aos-delay="100"></div>
                 <div class="col-lg-5 d-flex flex-column justify-content-center">
                     <p >{!! nl2br(e($apropo->approche)) !!}</p>
                 </div>
                 <div class="col-sm-12">
                     <div class="mb-3">
                       <a href='{{route('apropos.edit', $apropo->id)}}' class="btn  btn-block btn-outline-warning " >Modifier</a>
                       <a class='btn btn-block btn-outline-danger' href='#'  role='button' onClick="deleteApropos({{$apropo ->id}});">Supprimer</a>

                                         <form action="{{route('apropos.destroy', $apropo ->id)}}" method="post" id="delete-{{$apropo->id}}">
                                         @csrf
                                                     @method('delete')

                                        </form>


                     </div>
                   </div>
             </div>
         @endforeach


            </div>
          </section><!-- End Alt Services Section -->
          </main>



</x-app-layout>
@endsection

<script>
    function deleteApropos(id) {
        if (confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')) {
            document.getElementById('delete-' + id).submit();
        }
    }
</script>
