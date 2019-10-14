<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Interfaces\VideoRepository;
use App\Http\Services\Interfaces\VideoService;

class VideoServiceImpl implements VideoService
{
    protected $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
