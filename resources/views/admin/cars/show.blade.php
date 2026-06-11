@extends('layouts.app')

@section('topmenu')...@endsection

@section('content')
    <div class="card mt-6">
        

        <div class="py-4 px-6">
            <h2 class="text-lg font-semibold text-gray-800">Car details</h2>

            <p>Naam: {{ $car->name }}</p>
            <p>Merk: {{ $car->merk }}</p>
        </div>

    </div>
@endsection
