@extends('layouts.app')

@section('content')
    <h1>This is {{ $title }} page</h1>
    @if(count($about_content) > 0)
        <ul class="list-group">
            @foreach($about_content as $content)
                <li class="list-group-item">{{ $content }}</li>
            @endforeach
        </ul>
    @endif
@endsection