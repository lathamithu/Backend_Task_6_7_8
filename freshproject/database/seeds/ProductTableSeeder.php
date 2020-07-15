<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(array(
            array(
                'Name' => 'Cadbury',
                'Description' => 'Chocolate',
                'Price' => 50
            ),
            array(
                'Name' => 'Strawberry',
                'Description' => 'Essence',
                'Price' => 60
            ),
            array(
                'Name' => 'Caramel',
                'Description' => 'Flavour',
                'Price' => 100
            ),
            array(
                'Name' => 'Cindrella',
                'Description' => 'Doll',
                'Price' => 250
            ),
        ));
    }
}
