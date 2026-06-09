@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Admin</h1>
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
            <td><a href="">Details</a></td>
            <td><a href="">Wijzigen</a></td>
            <td><a href="">Verwijderen</a></td>
        </tr>
        @endforeach
    </table>

</div>
@endsection
