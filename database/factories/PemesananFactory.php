<?php

namespace Database\Factories;

use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemesanan>
 */
class PemesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Pemesanan::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(), 
            'nama_penumpang' => $this->faker->name,
            'stasiun_keberangkatan' => $this->faker->city,
            'stasiun_tujuan' => $this->faker->city,
            'tanggal_berangkat' => $this->faker->date,
            'jumlah_tiket' => $this->faker->randomNumber(2),
            'jumlah_dewasa' => $this->faker->randomNumber(1),
            'jumlah_anak' => $this->faker->randomNumber(1),
        ];
    }
}
