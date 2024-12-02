<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = \App\Models\Room::class; // Associate with Room model
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate floor number between 24 and 35
        $floor = fake()->numberBetween(24, 35);

        // Generate room type (1 for Premium, 2 for Deluxe, 3 for Executive)
        $roomType = fake()->numberBetween(1, 3);

        // Generate room number (1-5 for each type per floor)
        $roomNumber = fake()->numberBetween(1, 5);

        // Concatenate to form the room number
        $formattedRoomNumber = sprintf('%d%d%d', $floor, $roomType, $roomNumber);

        return [
            'title' => fake()->sentence(),
            'roomnumber' => $formattedRoomNumber,
            'type' => match ($roomType) {
                1 => 'Premium',
                2 => 'Deluxe',
                3 => 'Executive',
            },
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
    }
}
