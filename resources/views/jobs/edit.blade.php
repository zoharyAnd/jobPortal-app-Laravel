@extends('layouts.app')

@section('content')
    <h1>Edit Job</h1>
    {!! Form::open(['action' => ['JobsController@update', $job->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('jobTitle', 'Job Title')}}
            {{Form::text('jobTitle', $job->jobTitle, ['class' => 'form-control', 'placeholder' => 'Job Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('jobReference', 'Job Reference')}}
            {{Form::text('jobReference', $job->jobReference, ['class' => 'form-control', 'placeholder' => 'Job Reference'])}}
        </div>
        <div class="form-group">
            {{Form::label('jobClosingDate', 'Job Closing Date')}}
            {{Form::date('jobClosingDate', $job->jobClosingDate, ['class' => 'form-control', 'placeholder' => 'Job Closing Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('jobDescription', 'Job Description')}}
            {{Form::textarea('jobDescription', $job->jobDescription, ['class' => 'form-control', 'placeholder' => 'Job Description'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection