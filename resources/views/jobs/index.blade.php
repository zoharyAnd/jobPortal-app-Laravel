@extends('layouts.app')

@section('content')
    <h1>This is JOBS page</h1>
    @if(count($jobs) > 0)
        
        @foreach($jobs as $job)
            <div class="card">
                <h3><a href="/jobs/{{ $job->id}}"> {{$job->jobTitle}} </a></h3>
                <p>Reference: {{ $job->jobReference}}</p>
                <p>Closing date: {{ $job->jobClosingDate}}</p>
                <p>Description: {{ $job->jobDescription}}</p>
            </div>
        @endforeach
        {{ $jobs->links() }}
    @else
        <p>No jobs found</p>
    @endif
@endsection