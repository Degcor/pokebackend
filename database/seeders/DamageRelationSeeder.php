<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DamageRelation;

class DamageRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DamageRelation::insert([
            //Water
            [
                "win_type_id" => "11",
                "lose_type_id" => "5"
            ],
            [
                "win_type_id" => "11",
                "lose_type_id" => "6"
            ],
            [
                "win_type_id" => "11",
                "lose_type_id" => "10"
            ],
            [
                "win_type_id" => "13",
                "lose_type_id" => "11"
            ],
            //Fire
            [
                "win_type_id" => "10",
                "lose_type_id" => "7"
            ],
            [
                "win_type_id" => "10",
                "lose_type_id" => "9"
            ],
            [
                "win_type_id" => "10",
                "lose_type_id" => "12"
            ],
            [
                "win_type_id" => "10",
                "lose_type_id" => "15"
            ],
            [
                "win_type_id" => "5",
                "lose_type_id" => "10"
            ],
            [
                "win_type_id" => "6",
                "lose_type_id" => "10"
            ],
            //Grass
            [
                "win_type_id" => "12",
                "lose_type_id" => "5"
            ],
            [
                "win_type_id" => "12",
                "lose_type_id" => "6"
            ],
            [
                "win_type_id" => "12",
                "lose_type_id" => "11"
            ],

            [
                "win_type_id" => "3",
                "lose_type_id" => "12"
            ],
            [
                "win_type_id" => "7",
                "lose_type_id" => "12"
            ],
            [
                "win_type_id" => "15",
                "lose_type_id" => "12"
            ],
            //Poison
            [
                "win_type_id" => "4",
                "lose_type_id" => "12"
            ],
            [
                "win_type_id" => "4",
                "lose_type_id" => "18"
            ],
            [
                "win_type_id" => "5",
                "lose_type_id" => "4"
            ],
            [
                "win_type_id" => "14",
                "lose_type_id" => "4"
            ]
        ]);
    }
}
