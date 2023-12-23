@extends('front_office.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('front/images/cover2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="position-absolute align-items-center justify-content-center">
                <img src="{{url('front/images/cover-gif.gif')}}" alt="">
            </div>
            <div class="position-relative card col-md-9 ftco-animate p-5 pb-5">
                <legend>Valider votre vote pour:</legend>
                <form action="{{route('vote.add')}}" method="post" id="">
                    @csrf
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header mb-3">
                                <h5 class="modal-title">
                                    <span>Nom: </span>{{$candidate->nom}}</h5>
                                    <h6 class="modal-title">
                                        <span>Dossard: </span>{{$candidate->dossard}}</h6>

                                        <h5 class="modal-title">
                                            <span>Age: </span>{{$candidate->age}}</h5>
                                            <h6 class="modal-title">
                                                <span>Profession: </span>{{$candidate->profession}}</h6>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control" value="{{$candidate->id}}" name="candidate_id"
                                    id="candidate_id" hidden>
                                <div class="form-group">
                                    <label for="name">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="votre téléphone sans indicatif du pays" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="reference">Référence</label>
                                    <input type="text" class="form-control" name="reference" id="reference"
                                        placeholder="reference du payement">
                                </div> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">
                                    Valider le
                                        vote</button>
                           {{-- <a href="tel:#150*1*1*+237695626133*100#" class="btn btn-warning">Valider le
                                            vote</a> --}}
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
