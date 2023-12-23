@extends('front_office.master')
@section('content')
@php
use App\Models\candidate;

$candidates = candidate::all();

@endphp
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('front/images/cover2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="position-absolute align-items-center justify-content-center">
                <img src="{{url('front/images/cover-gif.gif')}}" alt="">
            </div>
            <div class="position-relative col-md-9 ftco-animate pb-5">
                <h1 class="mb-3 bread">Toutes les candidates</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row">
                    @foreach ($candidates as $candidate)

                    <div class="col-md-4">
                        {{-- <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url(storage/{{$candidate->image}});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">{{$candidate->nom}}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Dossard</span>
                                    <p class="price text-warning ml-auto">{{$candidate->dossard}} <span></span></p>
                                </div>
                                <a href="{{route('vote.edit',$candidate->id)}}" class="btn btn-outline-warning py-2 mr-1">Voter cette candidate</a>
                            </div>
                        </div> --}}
                        <div class="item p-1">
                            <div class="testimony-wrap rounded text-center py-3">
                              <div class="user-img mb-2" style="background-image: url(storage/{{$candidate->image}}); height:250px;width:250px">
                              </div>
                              <div class="text pt-4">
                                  <p class="name">{{$candidate->nom}}</p>
                                  <span class="text-white bg-warning p-2">{{$candidate->profession}}</span>
                                  <p class="">
                                      <span class="cat price text-warning ml-auto">
                                        {{$candidate->age}}
                                    </span>
                                     ans

                                  </p>
                              </div>
                              <a href="{{route('vote.edit',$candidate->id)}}" class="btn btn-outline-warning" >
                                voter cette candidate
                              </a>
                            </div>
                          </div>

                    </div>
                    @endforeach
                </div>
                {{-- <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul class="text-warning">
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
</section>
@endsection
