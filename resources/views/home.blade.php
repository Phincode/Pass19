@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="layout-specing">
            <h5 class="mb-0">Tableau de bord</h5>

            <div class="row">
              {{--   <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-bed h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">558</h5>
                                <p class="text-muted mb-0">Patients</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col--> --}}

              {{--   <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-file-medical-alt h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">$2164</h5>
                                <p class="text-muted mb-0">Avg. costs</p>
                            </div>
                        </div>
                    </div>
                </div> --}}<!--end col-->
                  <?php
                  $admin = \App\User::where('role', 'AD')->where('id', Auth::user('id')->id)
                      ->count();
                $user = \App\User::where('role', 'US')->where('id', Auth::user('id')->id)
                      ->count();
                  ;?>
                  @if ($admin == 1)

                <div class="col-xl-5 col-lg-5 col-md-5 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-social-distancing h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">{{$nombreUtilisateur}}</h5>
                                <p class="text-muted mb-0">Utilisateurs</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

              {{--   <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-ambulance h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">16</h5>
                                <p class="text-muted mb-0">Vehicles</p>
                            </div>
                        </div>

                    </div>
                </div> --}}<!--end col-->

                <div class="col-xl-5 col-lg-5 col-md-5 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-medkit h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">{{$nombrePatient}}</h5>
                                <p class="text-muted mb-0">Vaccinés</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                  @endif

                {{-- <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                    <div class="card features feature-primary rounded border-0 shadow p-4">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-md">
                                <i class="uil uil-medical-drip h3 mb-0"></i>
                            </div>
                            <div class="flex-1 ms-2">
                                <h5 class="mb-0">10</h5>
                                <p class="text-muted mb-0">Operations</p>
                            </div>
                        </div>
                    </div>
                </div> --}}<!--end col-->
            </div><!--end row-->
            @if ($user == 1)
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="table-responsive shadow rounded">
                        <table class="table table-center bg-white mb-0">
                            <thead>
                            <tr>
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
            @endif
        </div>
    </div><!--end container-->
@endsection
