{{-- @extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Show Category</h1>
    </div>

    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">{{ $category->slug }}</p>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

@endsection --}}

@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $category->name }}</h1>
                
            <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my posts</a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf

                <button class="btn btn-danger" onclick="return confirm('Are you Sure?')"><span data-feather="x-circle"></span> Delete</button>

              </form>
        </div>
    </div>
</div>

@endsection