<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::insert([
            [
                "name" => "bulbasaur",
                "description" => "A strange seed was planted on its back at birth. The plant sprouts and grows with this POKéMON.",
                "category" => "Seed Pokémon",
                "height" => "0.7",
                "weight" => "6.9",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png",
                "type_one_id" => "4",
                "type_two_id" => "12"
            ],
            [
                "name" => "charmander",
                "description" => "Obviously prefers hot places. When it rains, steam is said to spout from the tip of its tail.",
                "category" => "Lizard Pokémon",
                "height" => "0.6",
                "weight" => "8.5",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/004.png",
                "type_one_id" => "10",
                "type_two_id" => null
            ],
            [
                "name" => "squirtle",
                "description" => "After birth, its back swells and hardens into a shell. Powerfully sprays foam from its mouth.",
                "category" => "Seed Pokémon",
                "height" => "0.5",
                "weight" => "9",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/007.png",
                "type_one_id" => "11",
                "type_two_id" => null
            ],
            [
                "name" => "chikorita",
                "description" => "Its pleasantly aromatic leaves have the ability to check the hu­ midity and tem­ perature.",
                "category" => "Leaf Pokémon",
                "height" => "0.9",
                "weight" => "6.4",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/152.png",
                "type_one_id" => "12",
                "type_two_id" => null
            ],
            [
                "name" => "cyndaquil",
                "description" => "It usually stays hunched over. If it is angry or surprised, it shoots flames out of its back.",
                "category" => "Fire Mouse Pokémon",
                "height" => "0.5",
                "weight" => "7.9",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/155.png",
                "type_one_id" => "10",
                "type_two_id" => null
            ],
            [
                "name" => "totodile",
                "description" => "It is small but rough and tough. It won't hesitate to take a bite out of anything that moves.",
                "category" => "Big Jaw Pokémon",
                "height" => "0.6",
                "weight" => "9.5",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/158.png",
                "type_one_id" => "11",
                "type_two_id" => null
            ],
            [
                "name" => "treecko",
                "description" => "TREECKO is cool, calm, and collected - it never panics under any situation. If a bigger foe were to glare at this POKéMON, it would glare right back without conceding an inch of ground.",
                "category" => "Wood Gecko Pokémon",
                "height" => "0.5",
                "weight" => "5",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/252.png",
                "type_one_id" => "12",
                "type_two_id" => null
            ],
            [
                "name" => "torchic",
                "description" => "TORCHIC has a place inside its body where it keeps its flame. Give it a hug - it will be glowing with warmth. This POKéMON is covered all over by a fluffy coat of down.",
                "category" => "Chick Pokémon",
                "height" => "0.4",
                "weight" => "2.5",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/255.png",
                "type_one_id" => "10",
                "type_two_id" => null
            ],
            [
                "name" => "mudkip",
                "description" => "In water, MUDKIP breathes using the gills on its cheeks. If it is faced with a tight situation in battle, this POKéMON will unleash its amazing power - it can crush rocks bigger than itself.",
                "category" => "Mud Fish Pokémon",
                "height" => "0.4",
                "weight" => "7.6",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/258.png",
                "type_one_id" => "11",
                "type_two_id" => null
            ],
            [
                "name" => "turtwig",
                "description" => "It undertakes photosynthesis with its body, making oxygen. The leaf on its head wilts if it is thirsty.",
                "category" => "Tiny Leaf Pokémon",
                "height" => "0.4",
                "weight" => "10.2",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/387.png",
                "type_one_id" => "12",
                "type_two_id" => null
            ],
            [
                "name" => "chimchar",
                "description" => "Its fiery rear end is fueled by gas made in its belly. Even rain can’t extinguish the fire.",
                "category" => "Chimp Pokémon",
                "height" => "0.5",
                "weight" => "6.2",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/390.png",
                "type_one_id" => "10",
                "type_two_id" => null
            ],
            [
                "name" => "piplup",
                "description" => "It lives along shores in northern countries. A skilled swimmer, it dives for over 10 minutes to hunt.",
                "category" => "Penguin Pokémon",
                "height" => "0.4",
                "weight" => "5.2",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/393.png",
                "type_one_id" => "11",
                "type_two_id" => null
            ]
        ]);
    }
}
