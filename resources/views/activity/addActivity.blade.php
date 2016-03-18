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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                {!! Form::open(['url' => 'activity', 'class' => 'form-horizontal']) !!}
                <fieldset>
                    <div class="form-group">
                        {!! Form::label('name', 'Activity Title:') !!}
                        {!! Form::text('name',null,['class' => 'form-control', 'style'=>'width:50%;' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('details', 'Activity Details:') !!}
                        {!! Form::textarea('details',null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">


                            {!! Form::submit('Submit', ['class' => 'btn  btn-primary form-control','style' =>"width:80%;"]) !!}

                    </div>
                    {!! Form::close() !!}
                </fieldset>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                       Reset Activities
                    </a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in
                    </a>
                    <a href="#" class="list-group-item">Morbi leo risus
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
