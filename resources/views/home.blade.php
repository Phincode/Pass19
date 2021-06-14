@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid" style="background:url('images/bg/fond2.jpeg') center"fond>
        <div class="layout-specing">
            @if (Auth::user()->role=='AD')
            <h5 class="mb-0">Tableau de bord</h5> 
            @endif
            @if (Auth::user()->role=='US')
            <h5 class="mb-0">Rechercher votre certificat</h5> 
            @endif

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
                @error('error')
                 <div id="error" class="alert alert-danger  col-lg-6 alert-dismissible fade show" role="alert">
                      {{$errors->first()}}
                        <button type="button" id='close' class=" offset-1 btn btn-success" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                  </div>
                @enderror
                <div class="col-12 mt-4">
                   <form action="{{route('search')}}" method="POST">
                     @csrf
                        <div class="col-lg-6">
                            <input name="code"  class="form-control" placeholder="Entrez le code du vaccin P19_xxxxxxxxxx" type="text">
                            <input type="hidden" name="tel"  class="form-control" placeholder="" value="{{Auth::user()->contact}}" ><br>
                        </div>
                        <button style="display: inline" class="btn btn-success" type="submit">Rechercher</button>

                   </form>
                </div>
                 <p class="col-6">
                    Le Ministre des Transports insiste sur le caractère obligatoire de ce document qui est subordonné à
                    l’embarquement et au débarquement des aéronefs. Le Ministre des Transports invite tous les
                    candidats aux voyages à se conformer strictement aux présentes dispositions, afin de permettre des
                    vols aériens en toute sécurité en cette période de crise sanitaire.
                 </p>
            </div><!--end row-->
           

            <p class="col-6">
                Quelles sont les mesures barrières ?
                <ul>
                    <li>
                        Rester chez soi
            
                    </li>
                    <li>
                        Porter un masque
                    </li>
                    <li>
                        Désinfectez votre maison
                    </li>
                    <li>
                        Lavez-vous les mains
                    </li>
                    <li>
                        Auto-isolement frequent
                    </li>
                    <li>
                        Prise d'eau fréquente
                    </li>
                    <li>
                         Respecter la distanciation
                    </li>
                </ul>
            </p>
            @endif

        </div>
    </div><!--end container-->
@endsection
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('#close').on('click',function(){
            $('#error').css({
                'display':'none'
            })
        })
    });
</script>