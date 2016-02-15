<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProductsTableSeeder extends Seeder
{
	public function __construct(Faker $faker)
	{
		$this->faker = $faker;
	}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => $this->faker->name,
            'price' => 23.43,
            'description' => $this->faker->sentence($nbWords = 12, $variableNbWords = true),
            'description_short' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'image_path' => $this->faker->imageUrl($width = 960, $height = 640),
            'is_new' => 0,
            'is_on_sale' => 0,
        ]);
        DB::table('products')->insert([
            'name' => $this->faker->name,
            'price' => 43.22,
            'description' => $this->faker->sentence($nbWords = 5, $variableNbWords = true),
            'description_short' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'image_path' => $this->faker->imageUrl($width = 960, $height = 640),
            'is_new' => 1,
            'is_on_sale' => 1,
        ]);
        DB::table('products')->insert([
            'name' => $this->faker->name,
            'price' => 55.11,
            'description' => $this->faker->sentence($nbWords = 9, $variableNbWords = true),
            'description_short' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'image_path' => $this->faker->imageUrl($width = 960, $height = 640),
            'is_new' => 0,
            'is_on_sale' => 1,
        ]);
    }
}
