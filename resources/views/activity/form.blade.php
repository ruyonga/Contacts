<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 9:56 PM
 */   ?>
<fieldset>
    <div class="form-group" >
        {!! Form::label('title', 'Activity Title:') !!}
        {!! Form::text('title',null,['class' => 'form-control', 'style'=>'width:50%;' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('details', 'Activity Details:') !!}
        {!! Form::textarea('details',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">


        {!! Form::submit($submitbuttontext, ['class' => 'btn  btn-primary form-control','style' =>"width:80%;"]) !!}

    </div>
</fieldset>
