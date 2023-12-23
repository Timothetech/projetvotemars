@extends('front_office.master')
@section('content')
@php
use App\Models\candidate;

$candidates = candidate::get();

@endphp

<div class="hero-wrap ftco-degree-bg" style="background-image: url('front/images/cover2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="position-absolute align-items-center justify-content-center">
                    <img src="{{url('front/images/cover-gif.gif')}}" alt="">
                </div>
                <div class="position-relative text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Votez pour la prochaine Miss Cameroun !</h1>
                    <p style="font-size: 18px;">événement annuel qui vise à élire la plus belle femme du Cameroun.
                        Le concours est ouvert à toutes les femmes camerounaises âgées de 18 à 55 ans.</p>
                    <a href="https://vimeo.com/45830194"
                        class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                        <div class="icon bg-warning d-flex align-items-center justify-content-center">
                            <span class="ion-ios-play"></span>
                        </div>
                        <div class="heading-title ml-5">
                            <span>Etapes faciles pour voter</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                    <div class="col-md-4  align-items-center">
                        <div class="services-wrap rounded-right w-100 text-white p-3 ftco-animate bg-warning">
                            <h3 class="heading-section mb-4">PRESENTATION DU CONCOURS</h3>
                            {{-- <span class="subheading">About us</span> --}}
                            <p>Le concours de beauté Miss 8 Mars Cameroun qui a lieu le 7 Mars de chaque année est un concours qui prône l'autonomisation de la femme Africaine en général et Camerounaise en particulier.</p>
                            <p>Il a pour objectif d'inculquer dans un premier temps des valeurs d'une femme aux jeunes filles et dans un second temps valoriser les droits de la femme au travers de ces femmes qui combattent tous les jours afin de se faire une place dans la société.</p>

                            <p>Une héroïne, une histoire...
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100">
                            <h3 class="heading-section mb-4">Nos sponsors !</h3>
                            <div class="row d-flex mb-4">
                                <div class="carousel-car owl-carousel">
                                    <div class="item">
                                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                            <div class="services w-100 text-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <img src="{{asset('front/sponsor1.jpg')}}" alt="" srcset="">
                                                    {{-- <span class="flaticon-route"></span> --}}
                                                </div>
                                                <div class="text w-100">
                                                    <h3 class="heading mb-2">Bree Beauty</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="{{'candidates'}}" class="btn btn-outline-warning py-3 px-4">Voir les candidates</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading text-warning">Voici la liste</span>
                <h2 class="mb-2">Des candidates</h2> <a href="{{'candidates'}}" class="btn btn-outline-warning">Voir tout</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    @foreach ($candidates as $candidate)
                    {{-- <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url(storage/{{$candidate->image}});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">{{$candidate->nom}}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">Dorssard</span>
                                    <p class="price text-warning ml-auto">{{$candidate->dossard}} <span></span></p>
                                </div>

                                <a href="{{route('vote.edit',$candidate->id)}}" class="btn btn-outline-warning py-2 mr-1" >Voter cette candidate
                            </a>
                        </div>
                    </div>
                    </div> --}}
                    <div class="item p-1">
                        <a href="{{route('vote.edit',$candidate->id)}}" class="btn btn-outline-warning" >
                        <div class="testimony-wrap rounded text-center py-3">
                          <div class="user-img mb-2" style="background-image: url(storage/{{$candidate->image}}); height:250px;width:250px">
                          </div>
                          <div class="text pt-4">
                              <p class="name mb-2">{{$candidate->nom}}</p>
                              <span class="text-white bg-warning p-2">{{$candidate->profession}}</span>
                              <p class="mt-2">
                                  <span class="cat price text-warning ml-auto">
                                    {{$candidate->age}}
                                </span>
                                 ans
                                  {{-- <div class="d-flex mb-3">
                                      <p class="price text-warning ml-auto">{{$candidate->dossard}} <span></span></p>
                                  </div> --}}
                              </p>
                              Voter cette candidate
                          </div>
                        </div>
                        </a>
                      </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
