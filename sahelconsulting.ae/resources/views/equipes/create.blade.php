<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ajouter une Equipe</h5>

                            <!-- Formulaire pour ajouter une équipe -->
                            <form action="{{ route('equipes.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="nom">Nom :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nom" id="nom" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="post">Poste :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="post" id="post" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image">Image :</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="facebook">Facebook :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="facebook" id="facebook" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="twitter">Twitter :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="twitter" id="twitter" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="linkedin">LinkedIn :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="linkedin" id="linkedin" class="form-control">
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
