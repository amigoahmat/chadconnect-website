<x-app-layout>
    @extends('adminlayout.app')
    @section('content')
<!-- ======= Stats Counter Section ======= -->
<section id="stats-counter" class="stats-counter">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
        <div class="col-sm-12">
                <div class="mb-3 d-flex justify-content-end">
                    <a href="{{route('realisations.create')}}" class="btn  btn-block btn-primary mx-5 ">Nouveau</a>
                </div>
            </div>
            <h2>Nos Réalisations</h2>
        </div>

        <div class="row gy-4 align-items-center">

            <div class="col-lg-6">
                <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
            </div>

            <div class="col-lg-6">
                @foreach($realisations as $realisation)

                <div >
                  <div>  <h2>{{$realisation->nombre}}</h2></div>
                    <p><strong>{{$realisation->titre}}</strong></p>
                </div><!-- End Stats Item -->
                <div class="mb-3">
                        <a href='{{route('realisations.edit', $realisation->id)}}'
                            class="btn  btn-block btn-outline-warning ">Modifier</a>
                        <a class='btn btn-block btn-outline-danger' href='#' role='button'
                            onClick="deleteRealisation({{$realisation ->id}});">Supprimer</a>

                        <form action="{{route('realisations.destroy', $realisation ->id)}}" method="post"
                            id="delete-{{$realisation->id}}">
                            @csrf
                            @method('delete')

                        </form>


                    </div>

                @endforeach

            </div>

        </div>

    </div>
</section><!-- End Stats Counter Section -->

<script>
function deleteRealisation(id) {
    if (confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')) {
        document.getElementById('delete-' + id).submit();
    }
}
</script>

</x-app-layout>
@endsection
