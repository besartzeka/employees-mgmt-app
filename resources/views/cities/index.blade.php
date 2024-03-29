@extends('layouts.main')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Cities</h1>
</div>
<div class="row">
    <div class="card mx-auto">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card-header">
            <div class="row">
                <div class="col">
                <form method="GET" action="{{ route('cities.index') }}">
                <div class="form-row align-items-center">
                    <div class="col-auto">
                    <input type="search" name="search" class="form-control mb-2" id="search" placeholder="Tirana">
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                </div>
            </form>
                </div>
                <div>
                    <a href="{{ route('cities.create') }}" class="btn btn-primary mb-2">Create</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">State</th>
                        <th scope="col">City</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                        <tr>
                            <th scope="row">{{ $city->id }}</th>
                            <td>{{ $city->state->name }}</td>
                            <td>{{ $city->name }}</td>
                            <td>
                                <a href="{{ route('cities.edit', $city->id)}}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.setTimeout(function() {
    jQuery(".alert").fadeTo(500, 0).slideUp(500, function(){
        jQuery(this).remove(); 
    });
}, 2000);
</script>
@endsection