<?php if(!isset($sidebar_active)) $sidebar_active = null; ?>
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <base href="{{ url('/') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin{{ config('app.name') }} | {{ $title }}</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.partials.header')

</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
    <header class="main-header">
        <a href="{{ route('index') }}" class="logo">
            <span class="logo-mini"><b>A</b>BS</span>
            <span class="logo-lg"><b>Admin</b>{{ config('app.name') }}</span>
        </a>
        <nav class="navbar navbar-static-top">

            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('auth.logout') }}"><i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

    @include('layouts.partials.sidebar')

    <div class="content-wrapper">

        <section class="content-header">
            <h1>{{ $title }} <small>{{ $description }}</small></h1>
            {!! Breadcrumbs::renderIfExists() !!}
        </section>

        <section class="content">
            @include('layouts.partials.flash')

            @yield('content')
        </section>

    </div>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version:</b> <?= APP_VERSION ?> <b>[</b><?= APP_DATE ?><b>]</b>.
        <a href="{{ route('changelog') }}" style="color: #444;">Change Log</a>
    </div>
    <strong>Copyright © {{ date('Y') }} Zoilo Mora.</strong> All rights reserved.
</footer>

@include('layouts.partials.footer')

@yield('after_footer')

</body>
</html>
