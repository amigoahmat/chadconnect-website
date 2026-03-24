<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modifier l'actualité</h5>

                            <!-- Formulaire pour modifier une actualité -->
                            <form action="{{ route('actualites.update', $actualite->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Utilisation de la méthode PUT pour la mise à jour -->

                                <div class="row mb-3">
                                    <label for="titre">Titre :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control" value="{{ $actualite->titre }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slug">Slug :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" id="slug" class="form-control" value="{{ $actualite->slug }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description">Description :</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" id="description" class="form-control">{{ $actualite->description }}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="image" >Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="image" class="form-control" >
                                        @if ($actualite->image)
                                        <img src="{{ asset('images/actualites/' . $actualite->image) }}" alt="Image Actuelle" width="600" height="600">
                                    @else
                                        <p>Aucune image actuellement.</p>
                                    @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="categorie">Catégorie :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="categorie" id="categorie" class="form-control" value="{{ $actualite->categorie }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="editeur">Editeur :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="editeur" id="editeur" class="form-control" value="{{ $actualite->editeur }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary" style="background-color: blue; color: white;">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    </x-app-layout>
    @endsection
