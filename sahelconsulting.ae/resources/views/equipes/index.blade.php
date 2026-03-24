<x-app-layout>
    @extends('adminlayout.app')
    @section('content')
        <main id="main" class="main">
            <div class="col-sm-12">
                <div class="mb-3 d-flex justify-content-end">
                    <a href="{{route('equipes.create')}}" class="btn btn-block btn-primary mx-5">Nouveau</a>
                </div>
            </div>
            <section class="section profile">
                <div class="row">
                    @foreach ($equipes as $equipe)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                                <img src="{{ asset('images/equipes/'.$equipe->image) }}" alt="Profile" class="rounded-circle">
                                <h2>{{ $equipe->nom }}</h2>
                                <h3>{{ $equipe->post }}</h3>
                                <div class="social-links mt-2">
                                    <a href="{{ $equipe->twitter }}" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $equipe->facebook }}" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $equipe->instagram }}" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $equipe->linkedin }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                                <a href="{{ route('equipes.edit', $equipe->id) }}" class="btn btn-block btn-outline-warning">Modifier</a>
                                <a href="#" class="btn btn-block btn-outline-danger" onclick="deleteEquipe({{ $equipe->id }});">Supprimer</a>
                                <form id="delete-{{ $equipe->id }}" action="{{ route('equipes.destroy', $equipe->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </main>
    </x-app-layout>
@endsection

<script>
    function deleteEquipe(id) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) {
            document.getElementById('delete-' + id).submit();
        }
    }
</script>
