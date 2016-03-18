<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 18/03/2016
 * Time: 10:32 PM
 */ ?>
@extends('app')

@section('content')
    <h1>{{$activity->name}}</h1>


    <article>
        <p>
            {{$activity->details}}
        </p>
    </article>
@stop
