<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'job_title'=>$this->faker->sentence(),
            'tags'=>'laravel, api, backend',
            'company_name'=>$this->faker->company(),
            'location'=>$this->faker->city(),
            'email'=>$this->faker->companyEmail(),
            'website'=>$this->faker->url(),
            'job_description'=>$this->faker->paragraph(5),
            'deadline' => $this->faker->date(),
        ];
    }


}
