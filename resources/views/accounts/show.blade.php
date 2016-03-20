<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 1:13 AM
 */  ?>

@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$user->fname}} {{$user->lname}}</h3>
                    </div>
                    <div class="panel-body">
                        {{$user->email}}
                        {{$user->phone}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Actions</h3>
                    </div>
                    <div class="panel-body">
                        <a href="#" class="btn btn-default">Edit</a>
                        <a href="#" class="btn btn-warning">Make Queen</a>
                        <a href="#" class="btn btn-danger">Make King</a><br/>
                        <a href="#" class="btn btn-success">Make Region Head</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

