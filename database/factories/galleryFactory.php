<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\gallery>
 */
class galleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id'=>rand(0,10),
            'image'=>'book'. rand(1,9). '.png',
            'type'=>product::PRODUCT_IMAGE,
        ];
    }
}
