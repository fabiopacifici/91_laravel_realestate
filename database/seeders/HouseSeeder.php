<?php

namespace Database\Seeders;

use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
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
        }
    }
}
