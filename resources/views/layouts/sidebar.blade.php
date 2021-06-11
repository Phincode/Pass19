<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="#"><img src="images/Capture.PNG" height="50" alt=""></a>
        </div>
        <?php
        $admin = \App\User::where('role', 'AD')->where('id', Auth::user('id')->id)
            ->count();
        ;?>

        <ul class="sidebar-menu pt-3">
            @if ($admin == 1)
                <li><a href="/home"><i class="uil uil-dashboard me-2 d-inline-block"></i>Dashboard</a></li>

                <li><a href="{{ route('patient.index') }}"><i class="uil uil-wheelchair me-2 d-inline-block"></i>Patients</a>
                </li>
            @endif
            <li><a href=""><i class="uil uil-file me-2 d-inline-block"></i>Users</a></li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
</nav>
