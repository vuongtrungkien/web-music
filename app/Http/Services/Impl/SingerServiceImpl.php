<?php


namespace App\Http\Services\Impl;



use App\Http\Repositories\Interfaces\SingerRepository;
use App\Http\Services\Interfaces\SingerService;

class SingerServiceImpl implements SingerService
{

    protected $singerRepository;

    public function __construct(SingerRepository $singerRepository)
    {
        $this->singerRepository = $singerRepository;
    }

    public function getAll()
    {
        return $this->singerRepository->getAll();
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
