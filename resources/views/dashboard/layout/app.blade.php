<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('assets/img/logos/icon.png')}}">
    <!-- Page Title  -->
    <title>Irma Admin Dashboard</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('dashboard/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('dashboard/assets/css/theme.css?ver=2.2.0')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar dark-mode">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
        <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
            <div class="nk-sidebar-element nk-sidebar-head">
                <div class="nk-sidebar-brand">
                    <a href="html/index.html" class="logo-link nk-sidebar-logo">
                        <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                        <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                    </a>
                </div>
                <div class="nk-menu-trigger mr-n2">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                </div>
            </div><!-- .nk-sidebar-element -->
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-content">
                    <div class="nk-sidebar-menu" data-simplebar>
                        <ul class="nk-menu">

                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Management</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                    <span class="nk-menu-text">Management</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('managements.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Secretariat</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('conseil-administration.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Conseil d'Administration</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('messages.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Message du Président</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('consultatif.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Conseil Consultatif</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('partenaires.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Partenaires</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('emplois.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Emplois</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                                    <span class="nk-menu-text">Evenements</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('evenements.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Evenements actuels</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('animateurs.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Animateurs</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('sponsor.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Sponsors</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('ticket.create')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Reservations</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="html/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span> <span class="nk-menu-badge badge-warning">New</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">Membres</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('individuel.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Membres Individuels</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('corporate.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Membres Corporates</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('commissions.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Commissions Techniques</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                                    <span class="nk-menu-text">Publications</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('auteurs.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Auteurs</span></a>
                                    </li>
{{--                                    <li class="nk-menu-item">--}}
{{--                                        <a href="{{route('abonnement.index')}}" class="nk-menu-link">--}}
{{--                                            <span class="nk-menu-text">Abonnements</span></a>--}}
{{--                                    </li>--}}
                                    <li class="nk-menu-item">
                                        <a href="{{route('articles.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Articles</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                                    <span class="nk-menu-text">Affiliés</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('profileaffilie.index')}}" class="nk-menu-link">
                                            <span class="nk-menu-text">Membre Ordinaire</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div><!-- .nk-sidebar-menu -->
                </div><!-- .nk-sidebar-content -->
            </div><!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-md-block">
                                                <div class="user-status">
                                                    {{\App\Models\Type::where('id', \Illuminate\Support\Facades\Auth::user()->type_id)->first()->type}}
                                                </div>
                                                <div class="user-name dropdown-indicator">
                                                    {{\Illuminate\Support\Facades\Auth::user()->email}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-info">
                                                    <span class="lead-text">
                                                        {{\Illuminate\Support\Facades\Auth::user()->name}}
                                                    </span>
                                                    <span class="sub-text">
                                                        {{\Illuminate\Support\Facades\Auth::user()->email}}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="{{route('users.index')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="{{route('logout')}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->
            <!-- content @s -->
            @yield('content')
            <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2021 NgomaDigiTech <a href="https://ngomadigi.tech" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{asset('dashboard/assets/js/bundle.js?ver=2.2.0')}}"></script>
<script src="{{asset('dashboard/assets/js/scripts.js?ver=2.2.0')}}"></script>
<script src="{{asset('dashboard/assets/js/charts/gd-default.js?ver=2.2.0')}}"></script>
</body>

</html>
