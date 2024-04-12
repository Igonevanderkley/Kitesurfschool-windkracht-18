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




        <ul>
            <li>{{ $chosenPackage->name }}</li>
            <li>Duur: {{ floor($chosenPackage->total_hours * 2) / 2 }} uur</li>
            <li>Personen: {{ $chosenPackage->persons }} persoon per les</li>
            <li>Dagdelen: {{ $chosenPackage->lessons }} dagdeel</li>
            <li>inclusief alle materialen</li>
            <li> €{{ round($chosenPackage->price) }}</li>
        </ul>

        <div class="form">
            <form action="">
                <div>
                    <x-input-label for="location" :value="__('Les locatie')" />
                    <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" />
                </div>

                <div>
                    <x-input-label for="location" :value="__('Les locatie')" />
                    <x-text-input id="location" name="location" type="datetime-local" min="" max="17:00"
                        class="mt-1 block w-full" />
                </div>
                @if ($chosenPackage->persons > 1)
                    <h2>duo-lesser informatie</h2>
                    <div>
                        <x-input-label for="name" :value="__('Naam')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" />
                    </div>

                    <div>
                        <x-input-label for="street" :value="__('Straat & huisnummer')" />
                        <x-text-input id="street" name="street" type="text" class="mt-1 block w-full" />
                    </div>

                    <div>
                        <x-input-label for="hometown" :value="__('Woonplaats')" />
                        <x-text-input id="hometown" name="hometown" type="text" class="mt-1 block w-full" />
                    </div>
                @endif
            </form>
        </div>

    </x-app-layout>
</body>
