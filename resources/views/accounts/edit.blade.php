<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 9:45 PM
 */ ?>
@extends('app')

@section('content')
    <h1>User Details Edit</h1>
    @include('errors.errors')

    {!! Form::model($account,['method' => 'PATCH', 'url' => 'accounts/'.$account->id ]) !!}

    @include('accounts.form',['submitbuttontext'=>'Update Account'])

    {!! Form::close() !!}
@stop

