<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Interfaces\PlaylistRepository;
use App\Http\Services\Interfaces\PlaylistService;

class PlaylistServiceImpl implements PlaylistService
{

    protected $playlistRepository;

    public function __construct(PlaylistRepository $playlistRepository)
    {
        $this->playlistRepository = $playlistRepository;
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function create($data)
    {
        // TODO: Implement create() method.
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
