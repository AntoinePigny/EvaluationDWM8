<?php

use Illuminate\Database\Seeder;

class Artist_RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Artist_Record::class, 400)->create();
    }
}
