<?php


namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Interfaces\SingerRepository;
use App\Singer;

class SingerRepositoryImpl implements SingerRepository
{

    protected $singer;

    public function __construct(Singer $singer)
    {
        $this->singer = $singer;
    }

    public function getAll()
    {
        return $this->singer->all();}

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function create($obj)
    {
        $obj->save();
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
