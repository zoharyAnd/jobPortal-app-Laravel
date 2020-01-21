@extends('layouts.app')

@section('content')
    <h1>{{$job->jobTitle}}</h1>

    <p>Reference: {{ $job->jobReference}}</p>
    <p>Closing date: {{ $job->jobClosingDate}}</p>
    <p>Description: {{ $job->jobDescription}}</p>
    
    @if(Auth::user())
        @if(auth()->user('id')['id'] == $job->user_id)
            <a href="/jobs/{{$job->id}}/edit/" class="btn btn-default">Edit</a>
            
            {!!Form::open(['action' => ['JobsController@destroy', $job->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{-- hide the delete method for security --}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}

        @endif
    @endif
    
@endsection