<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 11:51 PM
 */ ?>
@extends('app')

@section('content')
    <h1>User Activity</h1>
    @include('errors.errors')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                {!! Form::model($activity,['method' => 'PATCH', 'url' => 'activities/'.$activity->id ]) !!}

                @include('activity.form',['submitbuttontext'=>'Update Activity'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
@stop


