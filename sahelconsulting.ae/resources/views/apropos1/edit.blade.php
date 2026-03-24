<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Modifier A propos1</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('aproposs.update', $apropo->id) }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mb-3">
                                    <label for="titre" >Titre</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control" value="{{$apropo->titre}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" >Description</label>
                                    <div class="col-sm-10">
                                        <textarea  name="description" id="description" class="form-control" >{{$apropo->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" >Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="image" class="form-control" >
                                        @if ($apropo->image)
                                        <img src="{{ asset('images/apropos1/' . $apropo->image) }}" alt="Image Actuelle" width="600" height="600">
                                    @else
                                        <p>Aucune image actuellement.</p>
                                    @endif
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label >Submit Button</label>
                                    <div class="col-sm-10">
                                      <button style="color: blue" type="submit" class="btn btn-primary">Soumettre</button>
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
