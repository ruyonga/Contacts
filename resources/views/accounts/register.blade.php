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
                <fieldset>

                    {!! Form::open(array('url' => 'account', 'class' => 'form-horizontal')) !!}

                    <div class="form-group">
                        <ul style="display: inline; list-style: none;">
                            <li> {!! Form::label('First Name') !!}
                                {!! Form::text('fname', null,['required','class'=>'form-control', 'placeholder'=>'First name']) !!}
                            </li>
                            <li>
                                {!! Form::label('Last Name') !!}
                                {!! Form::text('lname', null,['required','class'=>'form-control','placeholder'=>'Last name']) !!}
                            </li>
                        </ul>
                    </div>

                    <div class="form-group">
                        {!! Form::label('E-mail Address') !!}
                        {!! Form::text('email', null,['required', 'class'=>'form-control','placeholder'=>'Your e-mail address']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('ID Number') !!}
                        {!! Form::text('id_number', null,['required', 'class'=>'form-control','placeholder'=>'Id Number']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Phone Number') !!}
                        {!! Form::text('phone', null,['required', 'class'=>'form-control','placeholder'=>'Phone Number']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Job Position') !!}
                        {!! Form::text('position', null,['required', 'class'=>'form-control','placeholder'=>'Job Position']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Job Description') !!}
                        {!! Form::textarea('jobdescription', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'Job Description')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submit',
                          array('class'=>'btn btn-primary')) !!}
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

@stop
