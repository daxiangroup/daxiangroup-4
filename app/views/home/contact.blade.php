@extends('layouts.master')

@section('content')
    {{ Form::open(array('route'=>'contact.submit', 'class'=>'contact-frm')) }}
    {{ Form::token() }}

    <div class="row-fluid">
        <div class="span8">

            <div class="row-fluid">
                <div class="span12">
                    <h2>Contact</h2>
                    
                    <p>We'd like to hear from you. Whether you’re a prospective client, just sending a greeting or simply a fan of our work, say hi! Don't hesitate to drop us a line, we'll get back to you. Promise.</p>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span2">{{ Form::label('frm-name', 'Name') }}</div>
                <div class="span10">{{ Form::text('frm-name') }}</div>
            </div>

            <div class="row-fluid">
                <div class="span2">{{ Form::label('frm-email', 'E-mail') }}</div>
                <div class="span10">{{ Form::text('frm-email') }}</div>
            </div>

            <div class="row-fluid">
                <div class="span2">{{ Form::label('frm-about', 'What\'s This About?') }}</div>
                <div class="span10">{{ Form::select('frm-about', array(''=>'--', 'New Project'=>'A New Project', 'Update Feature'=>'Updating A Feature', 'Adding Feature'=>'Adding A New Feature', 'Praise'=>'Praise', 'Blame'=>'Blame', 'Just Saying Hello'=>'Just Saying Hello', 'Something Else'=>'Something Else')) }}</div>
            </div>

            <div class="row-fluid">
                <div class="span2">{{ Form::label('frm-website', 'Website') }}</div>
                <div class="span10">{{ Form::text('frm-website', '', array('placeholder'=>'http://')) }}</div>
            </div>

            <div class="row-fluid">
                <div class="span2">{{ Form::label('frm-message', 'Your Message') }}</div>
                <div class="span10">{{ Form::textarea('frm-message') }}</div>
            </div>

        </div>
        <div class="span4">

            <div class="row-fluid">
                <h2>Our 20</h2>
                info side
            </div>

        </div>
    </div>

    {{ Form::close() }}
@stop