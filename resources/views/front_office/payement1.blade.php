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
                <legend>Payer via:</legend>
                <div class="d-flex">
                <a href="tel:#150*1*1*+237695626133*100#" class=""> <img src="{{asset('front/orangemoney.png')}}" class="h-50 w-50"></a>
                <a href="tel:*126*1*1*+237679410223*100*0#" class=""><img src="{{asset('front/mtnmomo.jpeg')}}" class="h-50 w-50"></a>
                <a href="tel:*126*1*1*+237679410223*100*0#" class=""><img src="{{asset('front/mtnmomo.jpeg')}}" class="h-50 w-50"></a>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
