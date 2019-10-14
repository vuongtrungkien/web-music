<?php

use App\Singer;
use Illuminate\Database\Seeder;

class   AddSingerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $singer = new Singer();
        $singer->name = 'Hương Ly';
        $singer->save();
    }
}
