<!-- connect child to master -->
@extends('layouts.master')

@section('title')
    Lorem Ipsum Text
@stop

@section('content')

    @if(count ($paragraphs) > 0)
        <h1>Lorem Ipsum Text</h1>
        @foreach ($paragraphs as $paragraph)
            <p> {{ $paragraph }} </p>
        @endforeach
    @else
        <p>Enter number of paragraphs to generate. </p>
    @endif
@stop
