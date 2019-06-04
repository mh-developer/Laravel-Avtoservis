<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
    	foreach (range(1, 1000) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'lastname' => $faker->lastname,
                'email' => $faker->email,
                'password' => bcrypt('secret')
            ]);

            DB::table('avtoservis')->insert([
                'poslovalnica' => $faker->company,
                'postna_stevilka' => $faker->city,
                'naslov' => $faker->streetAddress,
                'telefonska_stevilka' => $faker->tollFreePhoneNumber
            ]);

            DB::table('services')->insert([
                'naziv' => $faker->word,
                'cena' => $faker->biasedNumberBetween($min = 10, $max = 100, $function = 'sqrt'),
                'trajanje_cas' => $faker->numberBetween($min = 30, $max = 180)
            ]);
        }

        foreach (range(1, 2000) as $increment) {
            DB::table('cars')->insert([
                'znamka' => $faker->company,
                'model' => $faker->jobTitle,
                'opis' => $faker->text,
                'leto_prve_registracije' => $faker->year,
                'id_uporabnika' => random_int(1, 1000)
            ]);
        }

        foreach (range(1, 4000) as $count) {
            DB::table('reservations')->insert([
                'termin' => $faker->dateTimeThisYear(),
                'dodatni_opis' => $faker->text,
                'is_confirm' => $faker->numberBetween($min = 0, $max = 1),
                'id_uporabnika' => random_int(1, 1000),
                'id_storitve' => random_int(1, 1000),
                'id_avtoservis' => random_int(1, 1000),
                'id_avtomobila' => random_int(1, 2000)
            ]);
        }
    }
}
