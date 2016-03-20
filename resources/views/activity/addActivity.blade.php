<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 18/03/2016
 * Time: 8:25 PM
 */
?>
@extends('app')

@section('content')

    <h1>Add Activity</h1>
    @include('errors.errors')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                {!! Form::open(['url' => 'activities', 'class' => 'form-horizontal']) !!}
                @include('activity.form',['submitbuttontext'=> 'Save Activity'])

                {!! Form::close() !!}

            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        Reset Activities
                    </a>
                    @foreach($activities as $activity)


                        <a class="list-group-item"
                           href="{{url('/activities', $activity->id)}}"> {{$activity->title}}   </a>


                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
