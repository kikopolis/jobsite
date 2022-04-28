<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use function implode;
use function ucfirst;

/**
 * @extends Factory
 */
class ListingFactory extends Factory {
	/**
	 * Define the model's default state.
	 * @return array<string, mixed>
	 * @throws Exception
	 */
	public function definition(): array {
		return [
			'title'       => $this->faker->words(random_int(2, 5), true),
			'tags'        => implode(',', $this->faker->words(random_int(2, 5))),
			'company'     => ucfirst($this->faker->word),
			'location'    => $this->faker->address,
			'email'       => $this->faker->email,
			'website'     => $this->faker->url,
			'description' => $this->faker->paragraphs(random_int(1, 5), true),
		];
	}
}
