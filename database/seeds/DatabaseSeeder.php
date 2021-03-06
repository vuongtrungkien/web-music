<?php

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
        $this->call(AddSingerSeed::class);
        $this->call(AddUserAdminSeed::class);
        $this->call(AddsongSeed::class);
    }
}
