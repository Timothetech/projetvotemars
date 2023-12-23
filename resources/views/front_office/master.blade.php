<!DOCTYPE html>
<html lang="en">

<head>
    <title>CONCOURS MISS CAMEROUN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{url('front/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/animate.css')}}" />

    <link rel="stylesheet" href="{{url('front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('front/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('front/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('front/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{url('front/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('front/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{url('front/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('front/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('front/css/style.css')}}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">CONCOURS <span class="text-warning"> MISS CAMEROUN</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item home_nav active" ><a href="{{route('home')}}" class="nav-link" id="home_nav">Home</a></li>
                    <li class="nav-item candidate_nav" ><a href="{{'candidates'}}" class="nav-link" id="candidate_nav">Candidates</a></li>
                    {{-- <li class="nav-item"><a href="{{'faq'}}" class="nav-link">Faq</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <h2 class="ftco-heading-2 text-center"><a href="#" class="logo">Concours<span class="text-warning">Miss
                        Cameroun</span></a></h2>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="#" target="_blank">Timothée OTTOU</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="addvoteModal" tabindex="-1" aria-labelledby="addvoteModalLabel" aria-hidden="true">
        <form action="" method="post" id="addVoteForm">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="addvoteModalLabel">Voter Madame candidate 1
                            Dossard 1</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="errMsgContainer">

                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="votre téléphone">
                        </div>
                        <div class="form-group">
                            <label for="reference">Référence</label>
                            <input type="text" class="form-control" name="reference" id="reference"
                                placeholder="reference du site">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-warning">Valider le
                            vote</button>
                    </div>
                </div>
            </div>
        </form>
    </div> --}}
    <script src="{{url('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('front/js/bootstrap.min.js')}}"></script>
    <script src="{{url('front/js/jquery.min.js')}}"></script>
    <script src="{{url('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{url('front/js/popper.min.js')}}"></script>
    <script src="{{url('front/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('front/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('front/js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('front/js/aos.js')}}"></script>
    <script src="{{url('front/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{url('front/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('front/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{url('front/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{url('front/js/google-map.js')}}"></script>
    <script src="{{url('front/js/main.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#home_nav').click(function(e) {
            $('.home_nav').addClass('active');
            $('.candidate_nav').removeClass('active');
        });
        $('#candidate_nav').click(function(e) {
            $('.home_nav').removeClass('active');
            $('.candidate_nav').addClass('active');
        });
                })
    </script>


</body>

</html>
