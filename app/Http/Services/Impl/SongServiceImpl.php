<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Interfaces\SongRepository;
use App\Http\Services\Interfaces\SongService;
use App\Song;
use Illuminate\Support\Facades\Request;

class SongServiceImpl implements SongService
{

    protected $songRepository;

    public function __construct(SongRepository $songRepository)
    {
        $this->songRepository = $songRepository;
    }

    public function getAll()
    {
        return $this->songRepository->getAll();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function getTopSongs($top)
    {
     return $this->songRepository->getTopSongs($top);
    }

    public function create($data)
    {


        $song = new Song();
        $song->name = $data->name;
        $song->category_id = $data->category_id;
        $song->singer_id = $data->singer_id;

        if ($data->hasFile('music')) {
            $music = $data->music;
            $patch = $music->storeAs('mp3', $music->getClientOriginalName(), 'public');
            $song->url = $patch;
        }
        $this->songRepository->create($song);
    }

    public function update($data, $object)
    {
        // TODO: Implement update() method.
    }

    public function destroy($object)
    {
        // TODO: Implement destroy() method.
    }
}
