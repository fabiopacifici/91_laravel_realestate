<?php

namespace Database\Seeders;

use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Utilities\Helpers as Help;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        // Option 1 con faker
        /*         for ($i = 0; $i < 10; $i++) {
            $house = new House();
            $house->property_image = $faker->imageUrl(category: 'Houses', format: 'jpg');
            $house->reference_no = $faker->bothify('??-########');
            $house->address = $faker->streetAddress();
            $house->post_code = $faker->postcode();
            $house->city = $faker->city();
            $house->state = $faker->state();
            $house->square_meters = $faker->numberBetween(100, 300);
            $house->rooms = $faker->numberBetween(1, 5);
            $house->bathrooms = $faker->numberBetween(1, 3);
            $house->type = $faker->randomElement(['Villa', 'Palazzo', 'Attico', 'Appartamento']);
            $house->desciption = $faker->text();
            $house->note = $faker->text();
            $house->price = $faker->randomFloat(2, 2000, 300000);
            $house->is_available = $faker->randomElement([1, 0]);
            $house->energy_rating = $faker->randomElement(['A+++', 'A++', 'B', 'C', 'D']);
            $house->save();
        } */
        /* Option 2 con csv */

        /* Chiama la funzione getCsvData per leggere il csv  */

        $data = Help::getCsvData(__DIR__ . '/houses.csv');
        //dd($data);
        /* cicla nell'array e genera un nuovo oggetto house a ciascuna iterazione */
        foreach ($data as $index => $row) {
            //dd($row, $index);
            /* we skip the rist row as it contains the csv heading fields */
            if ($index !== 0) {
                $house = new House();
                $house->property_image = $row[0];
                $house->reference_no = $row[1];
                $house->address = $row[2];
                $house->post_code = $row[3];
                $house->city = $row[4];
                $house->state = $row[5];
                $house->square_meters = $row[6];
                $house->rooms = $row[7];
                $house->bathrooms = $row[8];
                $house->type = $row[9];
                $house->desciption = $row[10];
                $house->price = $row[11];
                $house->is_available = $row[12];
                $house->energy_rating = $row[13];
                $house->save();
            }
        }
    }
}
