<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 18/03/2016
 * Time: 1:35 PM
 */
?>
@extends('app')

@section('content')
    <h1>
        Add Activity
    </h1>
    {!! Form::open(['url' => 'activities', 'class'=>'form-horizontal']) !!}}
    <fieldset>
        <div class="form-group">
            {!! Form::label('title', 'Activity Title:')!!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description:')!!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Reset',['class'=> 'btn btn-default form-control' ]) !!}
         {!! Form::submit('Submit',['class'=>'bt btn-primary form-control']) !!}
        </div>
    </fieldset>

@stop


