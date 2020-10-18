<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
            [
                "name" => "normal",
                "image" => "https://cdn.bulbagarden.net/upload/9/95/Normal_icon_SwSh.png"
            ],
            [
                "name" => "fighting",
                "image" => "https://cdn.bulbagarden.net/upload/3/3b/Fighting_icon_SwSh.png"
            ],
            [
                "name" => "flying",
                "image" => "https://cdn.bulbagarden.net/upload/b/b5/Flying_icon_SwSh.png"
            ],
            [
                "name" => "poison",
                "image" => "https://cdn.bulbagarden.net/upload/8/8d/Poison_icon_SwSh.png"
            ],
            [
                "name" => "ground",
                "image" => "https://cdn.bulbagarden.net/upload/2/27/Ground_icon_SwSh.png"
            ],
            [
                "name" => "rock",
                "image" => "https://cdn.bulbagarden.net/upload/1/11/Rock_icon_SwSh.png"
            ],
            [
                "name" => "bug",
                "image" => "https://cdn.bulbagarden.net/upload/9/9c/Bug_icon_SwSh.png"
            ],
            [
                "name" => "ghost",
                "image" => "https://cdn.bulbagarden.net/upload/0/01/Ghost_icon_SwSh.png"
            ],
            [
                "name" => "steel",
                "image" => "https://cdn.bulbagarden.net/upload/0/09/Steel_icon_SwSh.png"
            ],
            [
                "name" => "fire",
                "image" => "https://cdn.bulbagarden.net/upload/a/ab/Fire_icon_SwSh.png"
            ],
            [
                "name" => "water",
                "image" => "https://cdn.bulbagarden.net/upload/8/80/Water_icon_SwSh.png"
            ],
            [
                "name" => "grass",
                "image" => "https://cdn.bulbagarden.net/upload/a/a8/Grass_icon_SwSh.png"
            ],
            [
                "name" => "electric",
                "image" => "https://cdn.bulbagarden.net/upload/7/7b/Electric_icon_SwSh.png"
            ],
            [
                "name" => "psychic",
                "image" => "https://cdn.bulbagarden.net/upload/thumb/7/73/Psychic_icon_SwSh.png/64px-Psychic_icon_SwSh.png"
            ],
            [
                "name" => "ice",
                "image" => "https://cdn.bulbagarden.net/upload/1/15/Ice_icon_SwSh.png"
            ],
            [
                "name" => "dragon",
                "image" => "https://cdn.bulbagarden.net/upload/7/70/Dragon_icon_SwSh.png"
            ],
            [
                "name" => "dark",
                "image" => "https://cdn.bulbagarden.net/upload/d/d5/Dark_icon_SwSh.png"
            ],
            [
                "name" => "fairy",
                "image" => "https://cdn.bulbagarden.net/upload/c/c6/Fairy_icon_SwSh.png"
            ],
            [
                "name" => "unknown",
                "image" => "https://cdn.bulbagarden.net/upload/9/95/Normal_icon_SwSh.png"
            ],
            [
                "name" => "shadow",
                "image" => "https://cdn.bulbagarden.net/upload/9/95/Normal_icon_SwSh.png"
            ]
        ]);
    }
}
