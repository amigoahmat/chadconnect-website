<x-app-layout>
    @extends('adminlayout.app')
    @section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Liste des contacts</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">contacts</li>
              </ol>
            </nav>
          </div><!-- End Page Title --><br><br>


        <section class="section">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">


                            @foreach ($contacts  as $contact)


                            <!-- General Form Elements -->
                            <form action="#" method="post"  enctype="multipart/form-data">

                                <div class="row mb-3">
                                    <label for="titre" >Nom</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control" disabled  value="{{$contact->nom}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="titre" >EMail</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="titre" id="titre" class="form-control"disabled  value="{{$contact->email}}">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="description" >Message</label>
                                    <div class="col-sm-10">
                                        <textarea  name="description" id="description" class="form-control"> {{$contact->message}}</textarea>
                                    </div>
                                </div>



                            </form><!-- End General Form Elements -->
                            <div class="col-sm-12">
                                <div class="mb-3">
                                  <a class='btn btn-block btn-outline-danger' href='#'  role='button' onClick="deleteContact({{$contact ->id}});">Supprimer</a>

                                                    <form action="{{route('contacts.destroy', $contact ->id)}}" method="post" id="delete-{{$contact->id}}">
                                                    @csrf
                                                                @method('delete')

                                                   </form>


                                </div>
                              </div>

                            @endforeach


                        </div>
                    </div>

                </div>
            </div>
    </section>
    </main>

    </x-app-layout>
@endsection



<script>
    function deleteContact(id) {
        if(confirm('Etes vous sure de vouloir supprimer cette enregistrement ?')){
            document.getElementById('delete-' + id).submit();
        }
    }
</script>
