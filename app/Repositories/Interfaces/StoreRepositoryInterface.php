<?php

namespace App\Repositories\Interfaces;

interface StoreRepositoryInterface
{
    public function all();
    public function find($id);
    public function create($id, $data);
    public function update($id, $data);
    public function delete($id);

}
