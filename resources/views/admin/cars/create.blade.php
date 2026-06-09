@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Admin</h1>
        <form action="{{route('cars.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control" placeholder="Enter merk">
            </div>

            <button type="submit" class="btn btn-primary">Toevoegen</button>
        </form>
    </div>
@endsection
