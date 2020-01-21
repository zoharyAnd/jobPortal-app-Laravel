@extends('layouts.app')

@section('content')
    <h1>Create Job</h1>
    {!! Form::open(['action' => 'JobsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('jobTitle', 'Job Title')}}
            {{Form::text('jobTitle', '', ['class' => 'form-control', 'placeholder' => 'Job Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('jobReference', 'Job Reference')}}
            {{Form::text('jobReference', '', ['class' => 'form-control', 'placeholder' => 'Job Reference'])}}
        </div>
        <div class="form-group">
            {{Form::label('jobClosingDate', 'Job Closing Date')}}
            {{Form::date('jobClosingDate', '', ['class' => 'form-control', 'placeholder' => 'Job Closing Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('jobDescription', 'Job Description')}}
            {{Form::textarea('jobDescription', '', ['class' => 'form-control', 'placeholder' => 'Job Description'])}}
        </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection