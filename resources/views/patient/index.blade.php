@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="row">
                <div class="col-xl-9 col-lg-6 col-md-4">
                    <h5 class="mb-0">Base de données des personnes vaccinées</h5>
                    <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                        <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                            <li class="breadcrumb-item"><a href="/home">Pass-19</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List vaccinées</li>
                        </ul>
                    </nav>
                </div><!--end col-->

                <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                    <div class="justify-content-md-end">
                        <div class="row justify-content-between align-items-center">

                            <div class="col-sm-12 col-md-auto mt-4 mt-sm-0">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                       data-bs-target="#appointmentform">+ Ajouter</a>

                                    <!-- Add New Appointment Start -->
                                    <div class="modal fade" id="appointmentform" tabindex="-1"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter patient</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-3 pt-4">
                                                    <form role="form" method="POST"
                                                          action="{{ route('patient.store') }}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Nom <span
                                                                            class="text-danger">*</span></label>
                                                                    <input name="nom_patient" id="name" type="text"
                                                                           class="form-control"
                                                                           placeholder="Entrez le nom du patient :">
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Prénom(s) <span
                                                                            class="text-danger">*</span></label>
                                                                    <input name="prenom_patient" id="name" type="text"
                                                                           class="form-control"
                                                                           placeholder="Entrez le prénom du patient">
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Adresse <span
                                                                            class="text-danger">*</span></label>
                                                                    <input name="adresse" id="text" type="email"
                                                                           class="form-control"
                                                                           placeholder="Entrez l'adresse du patient :">
                                                                </div>
                                                            </div><!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Téléphone <span
                                                                            class="text-danger">*</span></label>
                                                                    <input name="tel" id="phone" type="tel"
                                                                           class="form-control"
                                                                           placeholder="Entrez le numéro de téléphone du patient">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label"> Née le : </label>
                                                                    <input name="nee" type="date"
                                                                           class="flatpickr flatpickr-input form-control"
                                                                           id="checkin-date">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="input-time">Lieu
                                                                        : </label>
                                                                    <input name="lieu" type="text"
                                                                           class="form-control timepicker"
                                                                           id="input-time" placeholder="Entrez le lieu">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Nom & prénom du medecin
                                                                        <span class="text-danger">*</span></label>
                                                                    <input name="nom_prenom_med" type="text"
                                                                           class="form-control timepicker"
                                                                           id="input-time"
                                                                           placeholder="Entrez le nom et le prénom du medecin">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Téléphone du medecin <span
                                                                            class="text-danger">*</span></label>
                                                                    <input name="tel_med" type="text"
                                                                           class="form-control timepicker"
                                                                           id="input-time"
                                                                           placeholder="Entrez le numéro de téléphone du medecin">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Spécialité du medecin
                                                                        <span class="text-danger">*</span></label>
                                                                    <input name="specialite_med" type="text"
                                                                           class="form-control timepicker"
                                                                           id="input-time"
                                                                           placeholder="Entrez la spécialité du medecin">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Vaccin <span
                                                                            class="text-danger">*</span></label>
                                                                    <input name="vaccin" type="text"
                                                                           class="form-control timepicker"
                                                                           id="input-time"
                                                                           placeholder="Entrez le nom du vaccin">
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-12">
                                                                <div class="d-grid">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Ajouter
                                                                    </button>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add New Appointment End -->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->

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

            @if ($message = Session::get('success'))
                <div id="suc" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button id="close" type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"> × </span>
                    </button>
                </div>
            @endif

            <div class="row">
                <div class="col-12 mt-4">
                    <div class="table-responsive shadow rounded">
                        <table class="table table-center bg-white mb-0">
                            <thead>
                            <tr>
                                <th class="border-bottom py-3" style="min-width: 120px;">Code</th>
                                <th class="border-bottom py-3" style="min-width: 120px;">Date</th>
                                <th class="border-bottom py-3" style="min-width: 50px;">Photo</th>
                                <th class="border-bottom py-3">Nom</th>
                                <th class="border-bottom py-3">Prénom</th>
                                <th class="border-bottom py-3" style="min-width: 120px;">Née</th>
                                <th class="border-bottom py-3">Tel</th>
                                <th class="border-bottom py-3">Adresse</th>
                                <th class="border-bottom py-3" style="min-width: 150px;">Ajouté par mail</th>
                                <th class="border-bottom py-3" style="min-width: 120px;">Modifié le</th>
                                <th class="border-bottom py-3" style="min-width: 200px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <th>{{ $patient->code_patient}}</th>
                                    <th>{{ $patient->date }}</th>
                                    <td class="py-3">
                                        <a href="#" class="text-dark">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ $patient->image_patient }}"
                                                     class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            </div>
                                        </a>
                                    </td>
                                    <td>{{ $patient->nom_patient }}</td>
                                    <td>{{ $patient->prenom_patient }}</td>
                                    <td>{{ $patient->nee }}</td>
                                    <td>{{ $patient->tel }}</td>
                                    <td>{{ $patient->adresse }}</td>
                                    <td>{{ $patient->email_user }}</td>
                                    <td>{{ $patient->updated_at }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('patient.edit', $patient->id_patient) }}" title="prendre photo" class="btn btn-primary"><i class="uil uil-camera"></i></a>

                                        <div class="modal fade" id="viewprofile-{{ $patient->id_patient }}"
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

                                        <a href="{{ route('patient.show', $patient->id_patient) }}" title="imprimer" class="btn btn-primary"><i class="uil uil-print"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row text-center">
                <div class="col-12 mt-4">
                    <ul class="pagination justify-content-end mb-0 list-unstyled">
                        <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border"> Prev</a></li>
                        <li class="active"><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">1</a></li>
                        <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">2</a></li>
                        <li><a href="#" class="pe-3 ps-3 pt-2 pb-2 border">Next </a></li>
                    </ul><!--end pagination-->
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    $.noConflict();
    $(document).ready(function () {
        $('#close').on('click',function(){
            $('#suc').css({
                'display':'none'
            })
        })
    });
</script>