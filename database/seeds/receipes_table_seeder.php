<?php

use Illuminate\Database\Seeder;

class receipes_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipes')->insert([
            'name' => "Ramen",
            'ingredients' => "noodle, meat",
            'category' => "japanese food",
        ]);
    }
}
