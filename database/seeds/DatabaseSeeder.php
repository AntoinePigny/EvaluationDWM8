<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArtistsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(LabelsTableSeeder::class);
        $this->call(Artist_RecordTableSeeder::class);
        $this->call(Genre_RecordTableSeeder::class);
        $this->call(RecordsTableSeeder::class);
    }
}
