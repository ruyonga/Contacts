<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 20/03/2016
 * Time: 2:42 AM
 */ ?>
@extends('app')
@section('title')
    Login
@stop

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h2>Admin Log in</h2>
            @include('errors.errors')
            <p>To Add contacts in the system please login.</p>
            <br>
            {!! Html::ul($errors->all(), array('class'=>'alert alert-danger errors')) !!}

            {!! Form::open(array('url' => 'users/login','class'=>'form')) !!}

            <br>{!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'example@gmail.com')) !!}
            <br>{!! Form::label('password', 'Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
            <br>
            {!! Form::submit('Sign In' , array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}
            <br>
        </div>
    </div>

@stop