@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Pet</h1>
        <div class="table-responsive mt-3">
            <h3>Pet name:</h3>
            @if (isset($pet['name']))
            <p> {{ $pet['name'] }} </p>
            @endif
            <h3>Pet photo url:</h3>
            @if (isset($pet['photoUrls'][0]))
                <p><image src={{ $pet['photoUrls'][0]}} alt={{ $pet['photoUrls'][0]}}></image></p>
            @endif
        </div>
    </div>
@endsection