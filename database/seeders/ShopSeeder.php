<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop')->insert([
        [
            'name' => 'Basket Ball',
            'desc' => 'Basketball is a group ball sport consisting of two teams of five people each competing to score points by putting the ball into the opponents basket.',
            'price' => 50
        ],
        [
            'name' => 'T-Shirt',
            'desc' => 'T-shirt is a type of clothing that covers part of the arms, the entire chest, shoulders, and stomach. A T-shirt typically do not have buttons, collar, or pocket. In general, T-shirts are short-sleeved (beyond the shoulder to elbow length) and have a round neck.',
            'price' => 50
        ],
        [
            'name' => 'Game',
            'desc' => 'Bowling is a type of game and sport whose activities are only to roll a bowling ball using one hand until it hits ten triangular pins.',
            'price' => 50
        ]
        ]);
    }
}