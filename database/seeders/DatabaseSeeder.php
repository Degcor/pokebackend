<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeSeeder::class);
        $this->call(DamageRelationSeeder::class);
        $this->call(PokemonSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
