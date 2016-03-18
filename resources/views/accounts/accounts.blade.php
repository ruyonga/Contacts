<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 19/03/2016
 * Time: 12:20 AM
 */
        ?>
@extends('app')

@section('content')
    <h1>User Accounts</h1>
    @foreach($accounts as $account)
        <article>
            <h2>
                <!--List all the names in the account-->
                <a href="{{url('/accounts', $account->id)}}"> {{$account->fname}} {{$account->lname}}   </a>
            </h2>

        </article>
    @endforeach
    @stop
