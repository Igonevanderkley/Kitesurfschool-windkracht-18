<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren</title>
    <link rel="stylesheet" href="/css/homepage.css">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kitesurfschool 18') }}
            </h2>
        </x-slot>

        <div class="banner-container">
            <img src="img/banner-image.png" alt="Banner Image">
        </div>

        <div class="packages">
            @foreach ($packages as $package)
                <div class="package">
                    <h2>{{ $package->name }}</h2>
                    <ul class="package-details">
                        <li>Duur: {{ floor($package->total_hours * 2) / 2 }} uur</li>
                        <li>Personen: {{ $package->persons }} persoon per les</li>
                        <li>Dagdelen: {{ $package->lessons }} dagdeel</li>
                        <li>inclusief alle materialen</li>
                        <li>
                            <a class="btn" href="reserve/{{ $package->id }}">Kies pakket</a>
                            <p>€{{ round($package->price) }}</p>
                        </li>
                    </ul>

                </div>
            @endforeach
        </div>

        {{-- <a href="reserveren" class="btn">Reserveren</a> --}}

    </x-app-layout>
</body>