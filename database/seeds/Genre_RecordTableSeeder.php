<?php

use Illuminate\Database\Seeder;

class Genre_RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Genre_Record::class, 800)->create();
    }
}
