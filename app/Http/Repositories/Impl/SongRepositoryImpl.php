<?php


namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Interfaces\SongRepository;
use App\Song;
use Illuminate\Support\Facades\DB;

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
       return $this->song->find($id);
    }

    public function getTopSongs($top,$category)
    {
        return $this->song->where('category_id',$category)->orderBy('view', 'DESC')->limit($top)->get();

    }

    public function getSongRandom()
    {
        return $this->song->inRandomOrder()->limit(1)->get();
    }

    public function getSongNew($category)
    {
        return $this->song->newQuery()->where('category_id',$category)->orderBy('created_at','DESC')
            ->limit(5)->get();
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
