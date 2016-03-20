<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 12:25 AM
 */ ?>
@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1>Add user contact/Self Register</h1>
                @include('errors.errors')

                {!! Form::open(['url' => 'accounts', 'class' => 'form-horizontal']) !!}

                @include('accounts.form', ['submitbuttontext' => 'Add Account'])

                {!! Form::close() !!}
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

@stop
