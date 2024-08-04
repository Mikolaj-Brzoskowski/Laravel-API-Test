@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Pet</h1>
        <div class="table-responsive mt-3">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Pet name</th>
                    <th>Pet photo url</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                        <tr>
                            @if (isset($pet['name']))
                            <td>{{ $pet['name'] }}</td>
                            @else
                            <td></td>
                            @endif
                            @if (isset($pet['photoUrls'][0]))
                                <td><image src={{ $pet['photoUrls'][0]}} alt={{ $pet['photoUrls'][0]}}></image></td>
                            @else
                            <td></td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection