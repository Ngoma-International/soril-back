<!DOCTYPE html>
<html>

<!-- Mirrored from html.it-rays.net/superfine/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 10:48:28 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Irma Congo Login</title>
    <meta name="description" content="SuperFine | Multi-purpose HTML5 Template">
    <meta name="author" content="IT-RAYS">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- CSS StyleSheets -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/assets.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link id="theme_css" rel="stylesheet" href="assets/css/light.css">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="assets/js/html5.js"></script>
    <![endif]-->

    <!-- Skin CSS file -->
    <link id="skin_css" rel="stylesheet" href="assets/css/skins/default.css">


</head>
<body class="login-page login-1">


<div class="pageWrapper animsition">

    <div id="contentWrapper">

        <div class="login-box-lg">

            <div class="clearfix over-hidden">
                <!-- Logo start -->
                <div class="logo light">
                    <a href="index.php">
                        <object data="assets/images/logo2.svg" type="image/svg+xml"></object>
                    </a>
                </div>
                <!-- Logo end -->
            </div>

            <div class="login-inner shape">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-input">
                                <x-label class="main-color" for="email" :value="__('Email')" />

                                <x-input id="email" class="form-control shape" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="form-input">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="form-control shape"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-button class="ml-3">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </form>
                <br>
                <a href="index.php">
                    <i class="fa fa-arrow-left"></i>
                    Retour a l'accueil
                </a>


            </div>

            <div class="copyrights white">© Copyrights <b class="main-color">NGOMA DigiTech</b> 2021. All rights reserved.</div>

        </div>

    </div>
</div>


<!-- Load JS plugins file -->
<script type="text/javascript" src="assets/js/assets.min.js"></script>

<!-- general script file -->
<script type="text/javascript" src="assets/js/script.js"></script>

</body>

<!-- Mirrored from html.it-rays.net/superfine/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 10:48:28 GMT -->
</html>
