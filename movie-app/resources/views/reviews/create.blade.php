@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
        Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div>
                    <label for="movie">Movie:</label>
                    <input type="text" id="movie" name="movie">
                </div>
                <div>
                    <label for="user">User:</label>
                    <input type="text" id="user" name="user">
                </div>
                <div>
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating">
                </div>
                <div>
                    <label for="comment">Rating:</label>
                    <input type="text" id="comment" name="comment">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection