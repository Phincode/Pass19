<div class="top-header">
    <div class="header-bar d-flex justify-content-between border-bottom">
        <div class="d-flex align-items-center">
            <a href="#" class="logo-icon">
                <img src="images/logo-icon.png" height="30" class="small" alt="">
                <img src="images/logo-dark.png" height="22" class="big" alt="">
            </a>
            <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-3" href="#">
                x
                    
            </a>
        </div>

        <ul class="list-unstyled mb-0">
            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-2"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3"
                         style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark" href="#">
                            <img src="images/Capture1.PNG" class="avatar avatar-md-sm rounded-circle border shadow"
                                 alt="">
                            <div class="flex-1 ms-2">
                                @auth
                                <span class="d-block mb-1">{{Auth::user()->name}}</span>
                                <small class="text-muted">{{Auth::user()->prenom}}</small>    
                                @endauth
                            </div>
                        </a>
                        <a class="dropdown-item text-dark" href="#"><span
                                class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span>
                            Profil</a>
                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span
                                class="mb-0 d-inline-block me-1"><i
                                    class="uil uil-sign-out-alt align-middle h6"></i></span> Deconnexion</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
