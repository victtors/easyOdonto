<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Easy Odonto</title>
    <link href="{{ asset('css/bootstrap-clearmin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roboto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-design.css') }}" rel="stylesheet">
    <link href="{{ asset('css/small-n-flat.css') }}" rel="stylesheet">
</head>
<body class="cm-no-transition cm-1-navbar">
	<div id="cm-menu">
	    <nav class="cm-navbar cm-navbar-primary">
	        <div class="cm-flex"><a href="index.html" class="cm-logo"></a></div>
	        <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
	    </nav>
	    <div id="cm-menu-content">
	        <div id="cm-menu-items-wrapper">
	            <div id="cm-menu-scroller">
	                <ul class="cm-menu-items">
	                    <li class="@active('paciente/?.*')"><a href="{{url('paciente/lista')}}" class="sf-house">Paciente</a></li>
	                    <li class="@active('agenda/?.*')"><a href="{{url('agenda')}}" class="sf-house">Agenda</a></li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</div>
	<header id="cm-header">
		@yield('header')
	</header>
	<div id="global">
		@yield('content')
		<footer class="cm-footer"><span class="pull-left">TCC</span><span class="pull-right">&copy; Easy Odonto</span></footer>
	</div>
    <script src="{{ asset('js/lib/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.min.js') }}"></script>
    <script src="{{ asset('js/fastclick.min.js') }}"></script>
    <script src="{{ asset('js/clearmin.min.js') }}"></script>
</body>
</html>