<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>EkipTech Pass-19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template"/>
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health"/>
    <meta name="author" content="Shreethemes"/>
    <meta name="email" content="shreethemes@gmail.com"/>
    <meta name="website" content="http://www.shreethemes.in/"/>
    <meta name="Version" content="v1.0.0"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/remixicon.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../../unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Hero Start -->
<section class="bg-home d-flex bg-light align-items-center"
         style="background: url('images/bg/bg-lines-one.png') center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <img src="{{asset('images/Capture.PNG')}}" height="100" class="mx-auto d-block" alt="">
                <div class="card login-page bg-white shadow mt-4 rounded border-0">
                    <div class="card-body">
                        <h4 class="text-center">Connexion</h4>
                        <form method="POST" action="{{ route('login') }}" class="login-form mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Email" name="email" value="{{ old('email') }}" required
                                               autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                               required autocomplete="current-password"placeholder="Mot de passe">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input align-middle" type="checkbox" value=""
                                                       id="remember-check">
                                                <label class="form-check-label" for="remember-check">Se souvenir de
                                                    moi</label>
                                            </div>
                                        </div>
                                        <a href="" class="text-dark h6 mb-0">Mot de passe oublié ?</a>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-0">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Se connecter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <br> <br>
                        <a href="" class="text-dark h6 mb-0">J'ai pas encore de compte je veux m'inscrire:<span style="text-decoration: underline">cliquez ici et vous serez redirigé!</span> </a>
                    </div>
                </div><!---->
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Icons -->
<script src="js/feather.min.js"></script>
<!-- Main Js -->
<script src="js/app-admin.js"></script>

</body>
