@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Admin</h1>
        <form id="form" action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $car->name) }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" value="{{ old('merk', $car->merk) }}">
                @error('merk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Wijzigen</button>
        </form>
    </div>
@endsection
