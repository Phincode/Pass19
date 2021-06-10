@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-md-flex justify-content-between">
                <h5 class="mb-0">Ajouter photo</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item"><a href="/home">Tableau de bord</a></li>
                        <li class="breadcrumb-item"><a href="">Patients</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajouter photo</li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-8 mt-4">
                    <div class="card border-0 p-4 rounded shadow">

                        <a href="#" class="btn btn-icon btn-pills btn-soft-primary"
                           data-bs-toggle="modal"
                           data-bs-target="#viewprofile"><i class="uil uil-eye"></i></a>

                        <div class="modal fade" id="viewprofile"
                             tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div
                                class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header border-bottom p-3">
                                        <h5 class="modal-title"
                                            id="exampleModalLabel">Prendre
                                            photo</h5>
                                        <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-3 pt-4">
                                        <form action=""></form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">

                                                    <div id="my_camera">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div id="results"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div id="my_camera"></div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="d-grid">
                                                    <a type="button" onclick="take_snapshot()"
                                                       class="btn btn-primary">
                                                        Capturer
                                                    </a>
                                                </div>
                                            </div><!--end col-->
                                            <form action="{{ route('patient.update', $patient->id_patient ) }}" method="POST">
                                                @csrf
                                                @method("PATCH")
                                                <div class="col-lg-6">
                                                    <div class="d-grid" id="photo_data_parent">
                                                        <button type="submit"
                                                                class="btn btn-primary">
                                                            Enregistrer
                                                        </button>

                                                    </div>
                                                </div><!--end col-->
                                                <input type="hidden" value="{{ $patient->id_patient }}">
                                                <div id="photo_data">

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->


    <script type="text/javascript" src="{{ url('webcamjs/webcam.min.js') }}"></script>
    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 320,
            height: 240,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );

        <!-- Code to handle taking the snapshot and displaying it locally -->
        function take_snapshot() {

            // take snapshot and get image data
            Webcam.snap( function(data_uri) {
                // display results in page
                document.getElementById('results').innerHTML =
                    '<img src="'+data_uri+'"/>';
                document.getElementById('photo_data').innerHTML="<input type='hidden' name='image_patient' value="+data_uri+"/>";
            } );
        }
    </script>
@endsection
