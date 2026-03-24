<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ajout d'un slider</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('projets.store') }}" method="post"  enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="titre" >Titre</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" >Description</label>
                                    <div class="col-sm-10">
                                        <textarea  name="description" id="description" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image1" >Image1 conception de projet </label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image1" id="image1" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image2" >Image2 debut des travaux</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image2" id="image2" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image3" >Image2 realisation des travaux</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image3" id="image3" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image4" >Image4 fin des travaux</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image4" id="image4" class="form-control">
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
