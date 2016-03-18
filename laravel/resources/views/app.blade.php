<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 18/03/2016
 * Time: 1:32 PM
 */ ?>

        <!DOCTYPE html>
<html>
<head>
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/sandstone.css') }}" rel="stylesheet">
    <link rel="script" href="{{ URL::asset('js/jquery.js') }}">
    <link rel="script" href="{{ URL::asset('js/bootstrap.min.js') }}">


</head>
<body>
<div class="container">
    <div class="content">
        @yield('content')
    </div>
</div>
@yield('footer')
</body>
</html>
