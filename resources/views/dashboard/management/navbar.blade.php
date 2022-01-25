<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box text-center">

                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>
            </div>

            <div class="d-flex">


                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                             src="{{asset($data->image)}}"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1">
                            {{$user->name}}
                        </span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="{{url('dashboard/management')}}">
                            <i class="ri-user-line align-middle me-1"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="{{url('/logout')}}">
                            <i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li>
                        <a href="{{url('/')}}" class="waves-effect">
                            <span>RETOUR A IRMA</span>
                        </a>
                    </li>

                    <li class="menu-title">Administration</li>

                    <li>
                        <a href="{{route('secretariate')}}" class="waves-effect">
                            <span>Secrétariat Général</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('conseiladmin')}}" class=" waves-effect">
                            <span>Conseil d'Administration</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('messagepresident')}}" class=" waves-effect">
                            <span>Message du Président</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('consultatif')}}" class=" waves-effect">
                            <span>Conseil Consultatif</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('partenaire')}}" class=" waves-effect">
                            <span>Partenaires</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('emploi')}}" class=" waves-effect">
                            <span>Offres d'Emploi</span>
                        </a>
                    </li>

                    <li class="menu-title">EVENT MANAGER</li>

                    <li>
                        <a href="{{route('evenement')}}" class=" waves-effect">
                            <span>Evenements</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('animateurs')}}" class=" waves-effect">
                            <span>Animateurs / Orateurs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('reservations')}}" class=" waves-effect">
                            <span>Reservations</span>
                        </a>
                    </li>

                    <li class="menu-title">PUBLICATION</li>

                    <li>
                        <a href="{{route('publication.index')}}" class=" waves-effect">
                            <span>Publication</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('liste')}}" class=" waves-effect">
                            <span>Abonnés</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
</div>
