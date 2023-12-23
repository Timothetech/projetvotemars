@extends('back_office.master')
@section('nav')
<ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item ">
                        <a href="{{route('dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Candidates</span>
                    </li>
                    <li class="menu-item active">
                        <a href="{{route('candidates.back')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Liste des candidates</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Votes</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('votes.back')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">liste des votes</div>
                        </a>
                    </li>
                </ul>
@endsection
@section('content')
<div class="row d-flex pb-0">
    <div class="col-lg-8 mb-4">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Candidates /</span> Liste</h4>
    </div>
    <div class="col-lg-4 col-md-4 ">
        <button type="button" class="flex-end btn btn-outline-primary me-2" data-bs-toggle="modal"
            data-bs-target="#addcandidateModal">
            <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp;
            Ajouter une candidate</button>

        <!-- Modal -->
        <div class="modal fade" id="addcandidateModal" tabindex="-1" aria-hidden="true">
            <form action="{{route('candidate.add')}}" method="post" id="" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Ajouter une candidate</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="{{url('back/assets/img/avatars/1.png')}}" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                    <div class="button-wrapper">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <span class="d-none d-sm-block">Telecharger une nouvelle photo</span>
                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                            <input type="file" id="upload" name="image" class="account-file-input"
                                                hidden />
                                        </label>
                                        <button type="button"
                                            class="btn btn-outline-secondary account-image-reset mb-4">
                                            <i class="bx bx-reset d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Supprimer</span>
                                        </button>

                                        <p class="text-muted mb-0">choisir un fichier JPG, GIF ou PNG. Taille max 800K
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">nom</label>
                                    <input type="text" id="nom" name="nom" class="form-control"
                                        placeholder="Nom candidate" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="dossard" class="form-label">Dossard</label>
                                    <input type="text" id="dossard" name="dossard" class="form-control"
                                        placeholder="Dossard candidate" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="text" id="age" name="age" class="form-control"
                                        placeholder="age candidate" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="profession" class="form-label">Profession</label>
                                    <input type="text" id="profession" name="profession" class="form-control"
                                        placeholder="profession candidate" required />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-success">Ajouter la candidate</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="mt-0 card">
    <div class="table-responsive text-nowrap">
        <table class="table table-striped" id="tabledatacandidate">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Dossard</th>
                    <th>Image</th>
                    <th>Profession</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($candidates as $candidate)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$candidate->nom}}</strong></td>
                    <td>{{$candidate->dossard}}</td>
                    <td>
                        <img src="storage/{{$candidate->image}}" alt="Avatar" class="rounded-circle w-px-50 h-auto" />
                    </td>
                    <td>{{$candidate->profession}}</td>
                    <td>{{$candidate->age}}</td>
                    <td><a href="" data-bs-toggle="modal"
                            data-bs-target="#updatecandidateModal{{$candidate->id}}"><span
                                class="badge bg-label-primary me-1">modifier</span></a>
                        <div class="modal fade" id="updatecandidateModal{{$candidate->id}}" tabindex="-1" aria-hidden="true">
                            <form action="{{route('candidate.edit')}}" method="post" id="" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Modifier une candidate</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                    <img src="storage/{{$candidate->image}}"
                                                        alt="user-avatar" class="d-block rounded" height="100"
                                                        width="100" id="uploadedAvatar" />
                                                </div>
                                            </div>
                                            <hr class="my-0" />
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">image</label>
                                                    <input type="file" id="image" value="{{$candidate->image}}" name="image" class="form-control"
                                                        placeholder="image candidate" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameBasic" class="form-label">nom</label>
                                                    <input type="text" id="nom" value="{{$candidate->nom}}" name="nom" class="form-control"
                                                        placeholder="Nom candidate" required />
                                                        <input type="text" id="id" value="{{$candidate->id}}" name="id" class="form-control" hidden />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="dossard" class="form-label">Dossard</label>
                                                    <input type="text" id="dossard" value="{{$candidate->dossard}}" name="dossard" class="form-control"
                                                        placeholder="Dossard candidate" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="age" class="form-label">Age</label>
                                                    <input type="text" id="age" value="{{$candidate->age}}" name="age" class="form-control"
                                                        placeholder="age candidate" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="profession" class="form-label">Profession</label>
                                                    <input type="text" id="profession" value="{{$candidate->profession}}" name="profession" class="form-control"
                                                        placeholder="profession candidate" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-success">Mettre à jour la candidate</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="{{route('candidate.delete',$candidate->id)}}"><span
                                class="badge bg-label-danger me-1">supprimer</span></a>
                        <a href="" data-bs-toggle="modal"
                        data-bs-target="#ajouterimage{{$candidate->id}}"><span
                            class="badge bg-label-success me-1">Ajouter Image</span></a>
                            <div class="modal fade" id="ajouterimage{{$candidate->id}}" tabindex="-1" aria-hidden="true">
                                <form action="{{route('image.add')}}" method="post" id="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Ajouter Image candidate</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="nameBasic" class="form-label">image</label>
                                                        <input type="file" id="image" value="{{$candidate->image}}" name="image" class="form-control"
                                                            placeholder="image candidate" required />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <input type="text" id="candidate_id" value="{{$candidate->id}}" name="candidate_id" class="form-control" hidden />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Fermer</button>
                                                <button type="submit" class="btn btn-success">Mettre à jour la candidate</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
{{-- <script>
    // let tablecandidate = new DataTable('#tabledatacandidate');
        $(document).ready( function () {
                $('#tabledatacandidate').DataTable({
                    // displayLength: 3,
                    lengthMenu:[[3, 5, 10, 25, 50, 100], [3, 5, 10, 25, 50, 100]]
                });
        } );
</script> --}}
@endsection
