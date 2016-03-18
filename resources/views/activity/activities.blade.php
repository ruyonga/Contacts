<?php
/**
 * Created by PhpStorm.
 * User: ruyonga
 * Date: 18/03/2016
 * Time: 10:21 PM
 */
        ?>
@extends('app')

@section('content')
    <h1>Activities</h1>
    @foreach($activities as $activity)
        <article>
            <h2>
                {{--<a href="{{action('',[$activity->id])}}"> {{$activity->name}}</a>--}}
                <a href="{{url('/activities', $activity->id)}}"> {{$activity->name}}   </a>
            </h2>
            <div class="body">{{$activity->details}}</div>
        </article>
    @endforeach
@stop