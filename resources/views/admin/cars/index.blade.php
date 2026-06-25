@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Admin</h1>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <table class="table">
        <tr>
            <th>name</th>
            <th>merk</th>
            <th>details</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @foreach($cars as $car)
        <tr>
            <td>{{$car->name}}</td>
            <td>{{$car->merk}}</td>
            <td><a href="{{ route('cars.show', ['car' => $car->id]) }}">Details</a></td>
            <td><a href="{{ route('cars.edit', ['car' => $car->id]) }}">Wijzigen</a></td>
            <td><a href="{{ route('cars.delete', ['car' => $car->id]) }}">Verwijderen</a></td>
        </tr>
        @endforeach
    </table>

</div>
@endsection
