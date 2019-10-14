<?php

use App\Song;
use Illuminate\Database\Seeder;

class AddsongSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $song = new Song();
        $song->name = 'Sóng Gió Remix';
        $song->url = 'https://drive.google.com/open?id=1XdFt25UwqdchyM--70q9vPlCvydyjcvg';
        $song->singer_id = 1;
        $song->view = 125;
        $song->save();
    }
}
