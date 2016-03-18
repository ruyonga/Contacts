<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 1:13 AM
 */  ?>

@extends('app')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">{{$user->fname}} {{$user->lname}}</h3>
        </div>
        <div class="panel-body">
            {{$user->email}}
            {{$user->phone}}
        </div>
    </div>
@stop
