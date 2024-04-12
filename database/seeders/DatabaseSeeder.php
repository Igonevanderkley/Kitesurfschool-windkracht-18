<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Packages;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Packages::insert([
            [
                'name' => 'Priveles 2,5 uur',
                'total_hours' => 2.5,
                'lessons' => 1,
                'persons' => 1,
                'price' => 175,
            ],
            [
                'name' => 'Losse Duo Kiteles 3,5 uur',
                'total_hours' => 3.5,
                'lessons' => 1,
                'persons' => 2,
                'price' => 135,
            ],
            [
                'name' => 'Kitesurf Duo lespakket 3 lessen 10,5 uur',
                'total_hours' => 10.5,
                'lessons' => 3,
                'persons' => 2,
                'price' => 375,
            ],
            [
                'name' => 'Kitesurf Duo lespakket 5 lessen 17,5 uur',
                'total_hours' => 17.5,
                'lessons' => 5,
                'persons' => 2,
                'price' => 675,
            ],
        ]);

         User::insert([
            'roleId' => 1,
            'name' => 'admin',
            'street' => 'straat 56',
            'hometown' => 'Utrecht',
            'birthdate' => '2006-05-18',
            'mobiel' => '123456789',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('vandoorn'),
         ]);

        // foreach ($lessons as $lesson) {
        //     DB::table('kitesurfing_lessons')->insert([
        //         'name' => $lesson['name'],
        //         'total_hours' => $lesson['total_hours'],
        //         'lessons' => $lesson['lessons'],
        //         'persons' => $lesson['persons'],
        //         'price' => $lesson['price'],
        //     ]);
        // }
    }
}
