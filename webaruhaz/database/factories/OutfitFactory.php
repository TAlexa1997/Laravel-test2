<?php

namespace Database\Factories;

use App\Models\Bottom;
use App\Models\Outfit;
use App\Models\Upper;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Outfit>
 */
class OutfitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $repeats = 10;
        do {
            $user_id = User::all()->random()->user_id;
            $upper_id = Upper::all()->random()->upper_id;
            $bottom_id = Bottom::all()->random()->bottom_id;
            $outfit = Outfit::where('user_id', $user_id)
                ->where('upper_id', $upper_id)
                ->where('bottom_id',$bottom_id)
                ->get();
            $repeats--;
        } while ($repeats >= 0 && count($outfit) > 0);
       

        return [
            'user_id' => $user_id,
            'upper_id' => $upper_id,
            'bottom_id' => $bottom_id,
            'status'=> fake()->boolean(),
            'additional_id'=> Outfit::all()->random()->additional_id,
        ];
    }

    
}

