<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ajouter APropos</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('apropos.store') }}" method="post"  enctype="multipart/form-data">
                                @csrf



                                <div class="row mb-3">
                                    <label for="histoire" >Histoire</label>
                                    <div class="col-sm-10">
                                        <textarea  name="histoire" id="histoire" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="imageh" >Image histoire</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="imageh" id="imageh" class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="expertise" >Expertise</label>
                                    <div class="col-sm-10">
                                        <textarea  name="expertise" id="expertise" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="imagee" >Image expertise</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="imagee" id="imagee" class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="vision" >Vision</label>
                                    <div class="col-sm-10">
                                        <textarea  name="vision" id="vision" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="imagev" >Image vision</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="imagev" id="imagev" class="form-control">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="approche" >Approche</label>
                                    <div class="col-sm-10">
                                        <textarea  name="approche" id="approche" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="imagea" >Image approche</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="imagea" id="imagea" class="form-control">
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
