<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ajouter une realisation</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('realisations.store') }}" method="post"  enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="titre" >Titre</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="nombre" >Nombre</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nombre" id="nombre" class="form-control">
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
