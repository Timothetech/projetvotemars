@extends('back_office.master')
@section('nav')
<ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
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
                    <li class="menu-item">
                        <a href="{{route('votes.back')}}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Basic">liste des votes</div>
                        </a>
                    </li>
                </ul>
@endsection
@section('content')
@php
    use App\Models\candidate;
    use App\Models\vote;

    $candidates = candidate::orderBy('nombre','desc')->limit(3)->get();

    // $votes = vote::with('candidate')->orderBy('candidate_id', 'desc')->limit(10)->get();

@endphp
<div class="row">
    <div class="col-lg-8 mb-4 order-0">
        @foreach ($candidates as $key=>$candidate)
            <div class="card mb-3">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Félicitations à {{$candidate->nom}}</h5>
                            <p class="mb-4">
                                Vous totalisez <span class="fw-bold">{{$candidate->nombre}} voix</span> ce qui fait de
                                vous le numéro <span class="fw-bold">{{$key+1}}</span>.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body p-0 px-0 px-md-4">
                            <img src="storage/{{$candidate->image}}" height="210"
                                alt="View Badge User" />
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
    <div class="col-lg-4 col-md-4 order-1">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Résultats</h5>
            </div>
            <div class="card-body">
                <ul class="p-0 m-0">
                    @php
                            $candidates = candidate::orderBy('nombre','desc')->get();
                    @endphp
                    @foreach ($candidates as $candidate)
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="storage/{{$candidate->image}}" alt="User"
                                    class="rounded" />
                            </div>
                            <div
                                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">{{$candidate->nom}}</small>
                                    <h6 class="mb-0">Dossard: {{$candidate->dossard}}</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">{{$candidate->nombre}}</h6>
                                    <span class="text-warning">voix</span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
