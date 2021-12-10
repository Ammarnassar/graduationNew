<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class GroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Group::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {

        return [
            'admin_id' => 2,
            'group_name' => $this->faker->name,
            'university_name' => $this->faker->name,
            'colleague' => $this->faker->name,
            'country' => $this->faker->city,
            'description' => $this->faker->paragraph,
        ];
    }
}
