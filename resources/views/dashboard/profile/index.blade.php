@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ auth()->user()->name }}</h5>
                <p class="card-text">{{ auth()->user()->username }}</p>
                <p class="card-text">{{ auth()->user()->email }}</p>
                <a href="{{ route('profile.edit', ['id' => auth()->user()->id]) }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>

@endsection