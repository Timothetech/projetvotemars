@php
use App\Models\candidate;
use App\Models\ImagesCandidate;

$candidates = candidate::get();

$candidatesimg = ImagesCandidate::get();

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CONCOURS MISS CAMEROUN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets1/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets1/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets1/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets1/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">En attente...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><span class="text-white"> Miss 8 Mars  </span><i class="fa fa-crown me-3"></i>Cameroun</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
                        <a href="{{route('candidates')}}" class="nav-item nav-link active">Candidates</a>
                        <a href="" class="nav-item nav-link">Aide</a>
                    </div>
                    <a href="{{route('candidates')}}" class="btn btn-primary py-2 px-4">Voter</a>
                </div>
            </nav>
            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Toutes les candidates</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Candidates</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <!-- Navbar & Hero End -->

        <!-- Team Start -->
        <div class="container-xxl pb-3">
            <div class="container">
                {{-- <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="entrer un mot">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Rechercher</button>
                </div> --}}
                <div class="row g-4">
                    @foreach ($candidatesimg as $candidate)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class=" img-fluid overflow-hidden m-1">
                                <img class="img-fluid" src="storage/{{$candidate->image}}" alt="">
                            </div>
                             <h5 class="mb-0">{{$candidate->candidate->nom}}</h5>
                          {{--  <small>{{$candidate->candidate->profession}}</small>
                            <small><h5 class="mb-0">{{$candidate->candidate->age}} ans</h5></small> --}}
                            <a class="btn btn-primary mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#votercandidate{{$candidate->candidate->id}}" href="">Donne moi des voix</i></a>
                            <div class="modal fade" id="votercandidate{{$candidate->candidate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content rounded-0">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Vote</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container-xxl py-5 px-0">
                                                <div class="row g-0">
                                                    <div class="col-md-6">
                                                        <div class="bg-transparent border rounded p-4">
                                                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                                            <p>Pour voter vous devez entrer votre téléphone et ensuite faire le dépot minimum 100 FCFA = 1VOIX via Orange Money ou MTN Mobile Money</p>
                                                            <div class="d-flex align-items-center">
                                                                <img class="img-fluid flex-shrink-0 rounded-circle" src="storage/{{$candidate->candidate->image}}" style="width: 50px; height: 50px;">
                                                                <div class="ps-3">
                                                                    <h5 class="mb-1">{{$candidate->candidate->nom}}</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 bg-dark align-items-center">
                                                            <h5 class="section-title ff-secondary text-start text-primary fw-normal mt-3">Votre</h5>
                                                            <h6 class="text-white mb-2">Numéro qui a un compte</h6>
                                                            <form action="{{route('vote.add')}}" method="post" id="">
                                                                @csrf
                                                                <input type="text" class="form-control" value="{{$candidate->candidate->id}}" name="candidate_id" hidden>
                                                                <div class="row g-3">
                                                                    <div class="col-md-12 align-items-center p-3">
                                                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer votre numéro pour voter" required>
                                                                            {{-- <label for="name">Téléphone</label> --}}
                                                                    </div>
                                                                    <div class="col-12 mb-3">
                                                                        <button class="btn btn-primary btn-sm m-0" type="submit">Voter</button>
                                                                </div>
                                                                <p class="text-white mb-3">Pour un dépot de 1000, gagner une voix supplémentaire</p>
                                                                <p class="text-white mb-3">100 FCFA = 1 VOIX</p>

                                                            </div>
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{-- <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->




        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">

        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets1/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets1/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets1/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets1/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('assets1/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets1/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets1/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets1/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets1/js/main.js')}}"></script>
</body>

</html>
