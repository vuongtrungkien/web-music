<?php


namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Interfaces\SongRepository;
use App\Song;

class SongRepositoryImpl implements SongRepository
{
    protected $song;

    public function __construct(Song $song)
    {
        $this->song = $song;
    }

    public function getAll()
    {
        return $this->song->All();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function getTopSongs($top)
    {
        return $this->song->orderBy('view','DESC')->limit($top)->get();

    }

    public function create($object)
    {
        $object->save();
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
