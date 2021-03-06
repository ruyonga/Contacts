<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 20/03/2016
 * Time: 3:06 AM
 */
?>

@extends('app')

@section('title')
Register
@stop

@section('content')

<div class="row">
    <div class="col-md-6">
        <h2>Register to create an account</h2>
         @include('errors.errors')
        <p>Hi, here you can create a new account. Just fill in the form and press sign up button.</p>
        <br>

        {!! Form::open(array('url' => 'auth/register','class'=>'form')) !!}

        <br>{!! Form::label('name', 'Username') !!}
        {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'kenny')) !!}
        <br>{!! Form::label('email', 'E-Mail Address') !!}
        {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'example@gmail.com')) !!}
        <br>{!! Form::label('password', 'Password') !!}
        {!! Form::password('password', array('class' => 'form-control')) !!}
        <br>
        {!! Form::label('password_confirmation','Confirm Password',['class'=>'control-label']) !!}
        {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        <br>
        {!! Form::submit('Sign Up' , array('class' => 'btn btn-primary')) !!}

        {!! Form::close() !!}
        <br>
    </div>
</div>

@stop

