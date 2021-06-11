<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Doctris - Doctor Appointment Booking System</title>
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
<section class="bg-half-150 d-table w-100 bg-light" style="background: url('images/bg/bg-lines-one.png') center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <img src="" height="24" class="mx-auto d-block" alt="">
                <div class="card login-page bg-white shadow mt-4 rounded border-0">
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <div class="card-body">
                        <h4 class="text-center">Création de compte</h4>
                        <form method="POST" action="{{ url('/compte') }}" class="login-form mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    {{-- <div class="mb-3">
                                        <label class="form-label">Code patient <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" placeholder="Entrez votre code patient" name="code"
                                               required="">
                                    </div> --}}
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nom <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Entrez  votre nom" name="name"
                                               required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Prénom <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Entrez  votre prénom" name="prenoms"
                                               required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Contact <span class="text-danger">*</span></label>
                                        <input type="phone" class="form-control" placeholder="Entrez  votre contact" name="contact"
                                               required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Mot de passe" required="" name="password">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Confirmer le mot de passe <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" placeholder="Confirmation du mot de passe" required="" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Creer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
</html>
