<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modifier une Equipe</h5>

                            <!-- Formulaire pour modifier une équipe -->
                            <form action="{{ route('equipes.update', $equipe->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="nom">Nom :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nom" id="nom" class="form-control" value="{{ $equipe->nom }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="post">Poste :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="post" id="post" class="form-control" value="{{ $equipe->post }}">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="facebook">Facebook :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $equipe->facebook }}">
                                        @if($equipe->facebook)
                                            <a href="{{ $equipe->facebook }}" target="_blank">Profil Facebook</a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="twitter">Twitter :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $equipe->twitter }}">
                                        @if($equipe->twitter)
                                            <a href="{{ $equipe->twitter }}" target="_blank">Profil Twitter</a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="linkedin">LinkedIn :</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $equipe->linkedin }}">
                                        @if($equipe->linkedin)
                                            <a href="{{ $equipe->linkedin }}" target="_blank">Profil LinkedIn</a>
                                        @endif
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="image">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" id="image" class="form-control">
                                        @if ($equipe->image)
                                            <img src="{{ asset('images/equipes/' . $equipe->image) }}" alt="Image Actuelle" width="600" height="600">
                                        @else
                                            <p>Aucune image actuellement.</p>
                                        @endif
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
