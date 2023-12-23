@extends('back_office.master')
@section('nav')
<ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="{{route('dashboard')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Candidates</span>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('candidates.back')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">Liste des candidates</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Votes</span>
                    </li>
                    <li class="menu-item active">
                        <a href="{{route('votes.back')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">liste des votes</div>
                        </a>
                    </li>
                </ul>
@endsection
@section('content')
@php
    use App\Models\vote;
    $votes = vote::where('status','en attente')->get();
@endphp
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Votes /</span> Liste</h4>
<div class="mt-0 card">
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Numéro téléphone</th>
                    <th>candidate</th>
                    <th>date</th>
                    <th>statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($votes as $vote)
                    <tr>
                        <td>{{$vote->user_phone}}</td>
                        <td>
                            <img src="storage/{{$vote->candidate->image}}" alt="Avatar"
                                class="rounded-circle w-px-50 h-auto" />
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$vote->candidate->nom}}</strong>
                        </td>
                        <td>{{$vote->created_at}}</td>
                        @if ($vote->status == 'en attente')
                        <td><span class="badge text-warning">{{$vote->status}}</span></td>
                        @else
                        <td><span class="badge text-success">{{$vote->status}}</span></td>
                        @endif
                        <td>
                            {{-- <a href="{{route('vote.update',$vote->id)}}"><span
                                class="badge bg-label-primary me-1">Valider</span></a> --}}
                                <a href="" data-bs-toggle="modal"
                                data-bs-target="#ajoutermontant{{$vote->id}}"><span
                                class="badge bg-label-primary me-1">Valider</span></a>
                                    <div class="modal fade" id="ajoutermontant{{$vote->id}}" tabindex="-1" aria-hidden="true">
                                        <form action="{{route('vote.update',$vote->id)}}" method="post" id="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel1">Entrer le montant qui a été envoyé par </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label for="nameBasic" class="form-label">Montant</label>
                                                                <input type="number" id="montant" name="montant" class="form-control"
                                                                    placeholder="Montant" required />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <input type="text" id="candidate_id" value="{{$vote->id}}" name="candidate_id" class="form-control" hidden />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        <button type="submit" class="btn btn-success">Valider ce vote</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                        <a href="{{route('vote.delete',$vote->id)}}"><span
                                class="badge bg-label-danger me-1">Supprimer</span></a>
                    </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
