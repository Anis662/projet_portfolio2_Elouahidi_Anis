<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "photo" =>$this->faker->imageUrl(352,240),
            "anniversaire" =>$this->faker->date("d-m-Y"),
            "website" =>$this->faker->safeEmailDomain,
            "phone" =>$this->faker->phoneNumber,
            "city" =>$this->faker->city,
            "age" =>$this->faker->numberBetween(0,40),
            "degre" =>$this->faker->word(),
            "mail" =>$this->faker->email,
            "freelance" =>$this->faker->text(10),
            "texte" =>$this->faker->text(80),

        ];
    }
}
