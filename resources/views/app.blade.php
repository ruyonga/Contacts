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
    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/sandstone.css') }}" rel="stylesheet">

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php use Illuminate\Support\Facades\Auth;echo url('/');?>">Contacts
                Management System</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo url('about');?>">About us<span
                                class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo url('help');?>">Help</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actions<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo url('activities/create');?>">Add Activity</a></li>
                        <li><a href="<?php echo url('accounts/create');?>">Add Contact</a></li>
                        <li><a href="<?php echo url('activities');?>"> Activities</a></li>
                        <li><a href="<?php echo url('accounts');?>">Accounts</a></li>

                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php if (Auth::check()) { ?>
                <li><a href="<?php echo url('auth/logout');?>">Log out</a></li>

                <?php } else { ?>

                <li><a href="<?php echo url('gologin');?>">Login</a></li>

                <?php }?>

            </ul>
        </div>
    </div>
</nav>
<div class="container">

        <div class="content">
        @yield('content')
    </div>
</div>
@yield('footer')
        <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
