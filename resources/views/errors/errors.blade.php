<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 9:47 PM
 */     ?>

@if($errors->any())
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>


@endif