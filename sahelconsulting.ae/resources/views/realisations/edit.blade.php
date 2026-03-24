<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modifier une realisation</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('realisations.update', $realisation->id) }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mb-3">
                                    <label for="titre" >Titre</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control" value="{{$realisation->titre}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nombre" >Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$realisation->nombre}}">
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label >Submit Button</label>
                                    <div class="col-sm-10">
                                      <button style="color: blue" type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                  </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
    </section>
    </main>

    </x-app-layout>
@endsection
