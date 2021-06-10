<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<!doctype html>
<html lang="fr">
<!-- Bootstrap -->
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- simplebar -->
<link href="{{ url('css/simplebar.css') }}" rel="stylesheet" type="text/css"/>
<!-- Icons -->
<link href="{{ url('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('css/remixicon.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ url('css/line.css') }}">
<!-- Css -->
<link href="{{ url('css/style.min.css') }}" rel="stylesheet" type="text/css"/>
<body style="padding: 0;margin:0; ">
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div>
            <img src="{{ asset('images/capture.png') }}" alt="" style="height: 100px;width: 200px">
        </div>
        <div style="margin-top: -100px; margin-left: 800px; float: right">
            <img src="{{ asset('images/capture1.png') }}" alt="" style="height: 100px;width: 200px;">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <center>
            <p>
            <div style="border: solid 2px black; width: 700px">
                <h3>Attestation de vaccination au covid-19 </h3>
            </div>
            </p>

        </center>
    </div>
    <br>
    <br>
    <div class="row">
        <center>
            <p>Cette attestation administrative valide les differents vaccinseffectués par la personne ci-dessous.</p>

        </center>
    </div>
    <br>
    <br>
    <div class="row" style="padding-left: 150px">

        <div>
            <p>Nom: <span style="font-weight: bold">{{ $patient->nom_patient }}</span></p>
            <p>Prénoms: <span style="font-weight: bold">{{ $patient->prenom_patient }}</span></p>
            <p>Date de naissance: <span style="font-weight: bold">{{ $patient->nee }}</span></p>
        </div>
        <div style="margin-left: 500px; margin-top: -120px;">
            <p>Vaccin: <span style="font-weight: bold">{{ $patient->vaccin }}</span></p>
            <p>Date de dernière vaccination: <span style="font-weight: bold">{{ $patient->date }}</span></p>
            <p>Etat de vaccination: <span style="font-weight: bold">Terminer</span></p>
        </div>
    </div>
    <div class="row" style="padding-left: 150px">
        <div>
            {{ $qrcode }}
        </div>
        <div style="margin-left: 500px; margin-top: -200px;">
            <img style="width: 200px;height: 200px" src="{{ $patient->image_patient }}" alt="">
        </div>
    </div>
    <br>
    <br>
    <div class="row" style="margin-top: 30px;">
        <p>Ce document est personnel et non transférable.
            Il est créé en application du décret n ... autorisant la création d'un traitement de données à caractère
            personnel relatif aux vaccinations contre la Covid-19.</p>
    </div>
    <div class="row">
        <center>
            <p><b>TEXTE DE CONFIDENTIALITE A METTRE ICI.</b></p>
        </center>
    </div>
    <br>
    <br>
    <div class="col-md-4 offset-9">
        <img src="{{ asset('images/capture3.png') }}" alt="" style="height: 100px;width: 200px">
    </div>
    <div class="mt-4"  align="center">

        <a onclick="window.print();" class="btn btn-soft-primary d-print-none"><i class="uil uil-print"></i> Print</a>

    </div>
    <br>
    <br>
</div>


{{--<!-- javascript -->--}}
{{--<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>--}}
{{--<!-- simplebar -->--}}
{{--<script src="{{ url('js/simplebar.min.js') }}"></script>--}}
{{--<!-- Icons -->--}}
{{--<script src="{{ url('js/feather.min.js') }}"></script>--}}
<!-- Main Js -->
{{--<script src="{{ url('js/app-admin.js') }}"></script>--}}
<script>
    function display() {
        window.print();
    }
</script>
</body>
</html>
