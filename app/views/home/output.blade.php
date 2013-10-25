@extends('layouts.master')

@section('content')
    <div class="center">
        <p>We're proud of the work we've done. Take a look through some of our highlights, we think you'll be impressed.</p>
    </div>

    <div class="output">
        <div class="hover"></div>
        <div class="img vividvoice"></div>
        <a href="{{ URL::route('output.vividvoice') }}"><h2>Vivid Voice</h2> - View The Details</a>
    </div>
@stop