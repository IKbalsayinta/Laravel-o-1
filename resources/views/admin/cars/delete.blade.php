@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Admin</h1>
        <form id="form" action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="POST">
            @method('DELETE')
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $car->name }}" disabled>
            </div>
            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control" value="{{ $car->merk }}" disabled>
            </div>

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
