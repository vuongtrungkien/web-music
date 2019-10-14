<?php


namespace App\Http\Services\Interfaces;


interface BaseService
{
    public function getAll();

    public function findById($id);

    public function create($request);

    public function update($request, $id);

    public function destroy($id);
}
