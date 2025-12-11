<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speakers>
 */
class SpeakersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_speaker' => $this->faker->name(),
            'asal_instansi' => $this->faker->company(),
            'topic' => $this->faker->sentence(3),
            'summary' => $this->faker->paragraph(3),
            'foto' => $this->faker->imageUrl(400, 400, 'people', true, 'speaker'),
        ];
    }
}
