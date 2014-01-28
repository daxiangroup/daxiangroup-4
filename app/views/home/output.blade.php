@extends('layouts.master')

@section('content')
    <div class="hero">
        <div class="site-width">
            Oh the things we've done.
        </div>
    </div>

    <div class="center">
        <p>We're proud of the work we've done. Take a look through some of our highlights, we think you'll be impressed.</p>
    </div>

    <div class="xoutput">
        <div class="hover"></div>
        <div class="img vividvoice"></div>
        <a href="{{ URL::route('output.vividvoice') }}"><h2>Vivid Voice</h2> - View The Details</a>
        <div class="arf">
            <div class="artbox-wrapper">
                <div class="box big b-top b-left"></div>
                <div class="box big b-top b-left b-right"></div>
                <div class="big container b-top b-right">
                    <div class="box small filler"></div>
                    <div class="box small filler"></div>
                    <div class="box small clear-left"></div>
                    <div class="box small filler"></div>
                </div>
                <div class="box big b-top b-left b-bottom clear-left"></div>
                <div class="box big b-top b-left b-bottom"></div>
                <div class="box big b-top b-left b-bottom b-right"></div>
                <div class="big skinny clear-left container b-bottom"></div>
                <div class="box big b-left b-right b-bottom"></div>
                <div class="big skinny container">
                    <div class="box small b-bottom"></div>
                    <div class="box small filler"></div>
                </div>
                <div class="box big b-left b-right b-bottom"></div>
            </div>
        </div>
    </div>
@stop