<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ajouter une actualié</h5>

                            <!-- Formulaire pour ajouter une équipe -->
                            <form action="{{ route('actualites.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="titre">Titre :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slug">Slug :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" id="slug" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description" >Description</label>
                                    <div class="col-sm-10">
                                        <textarea  name="description" id="description" class="form-control"></textarea>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="image">Image :</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="categorie">Categorie :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="categorie" id="categorie" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="editeur">Editeur :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="editeur" id="editeur" class="form-control">
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
