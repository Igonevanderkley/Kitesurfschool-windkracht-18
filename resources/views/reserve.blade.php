<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserveren</title>
    <link rel="stylesheet" href="/css/reserveren.css">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reserveren') }}
            </h2>
        </x-slot>

        <div class="content">
            <ul>
                <li>{{ $chosenPackage->name }}</li>
                <li>Duur: {{ floor($chosenPackage->total_hours * 2) / 2 }} uur</li>
                <li>Personen: {{ $chosenPackage->persons }} persoon per les</li>
                <li>Dagdelen: {{ $chosenPackage->lessons }} dagdeel</li>
                <li>inclusief alle materialen</li>
                <li> €{{ round($chosenPackage->price) }}</li>
            </ul>

            <div class="form">
                <form action="{{ route('ReservationController.store') }}" method="POST">
                    @csrf
                    <div class="basic-data">


                        <div>
                            <x-input-label for="location" :value="__('Les locatie')" />
                            <select name="location" id="location">
                                <option value="Zandvoort">Zandvoort</option>
                                <option value="Muiderberg">Muiderberg</option>
                                <option value="Wijk aan Zee">Wijk aan Zee</option>
                                <option value="Ijmuiden">Ijmuiden</option>
                                <option value="Scheveningen">Scheveningen</option>
                                <option value="Hoek van Holland">Hoek van Holland</option>
                            </select>
                        </div>

                        <div>
                            <x-input-label for="date" :value="__('Datum')" />
                            <input type="date" id="date" name="date">
                        </div>

                        <div>
                            <x-input-label for="time" :value="__('Tijdslot')" />
                            <input type="time" id="time" name="time">
                        </div>
                    </div>


                    @if ($chosenPackage->persons > 1)
                        <h2>duo-lesser informatie</h2>
                        <div>
                            <x-input-label for="secondary_person_name" :value="__('Naam')" />
                            <x-text-input id="secondary_person_name" name="secondary_person_name" type="text" class="mt-1 block w-full" />
                        </div>

                        <div>
                            <x-input-label for="secondary_person_street" :value="__('Straat & huisnummer')" />
                            <x-text-input id="secondary_person_street" name="secondary_person_street" type="text" class="mt-1 block w-full" />
                        </div>

                        <div>
                            <x-input-label for="secondary_person_hometown" :value="__('Woonplaats')" />
                            <x-text-input id="secondary_person_hometown" name="secondary_person_hometown" type="text" class="mt-1 block w-full" />
                        </div>
                    @endif
                    <input type="hidden" name="package_id" value="{{ $chosenPackage->id }}">

                    <button class="blue-button" type="submit">Reserveer</button>
                </form>
            </div>
        </div>
        </div>

    </x-app-layout>
</body>

</html>
