<?php

namespace App\Repositories;

use App\Models\Store;
use App\Repositories\Interfaces\StoreRepositoryInterface;

class StoreRepository implements StoreRepositoryInterface{
    protected $model;

    public function __construct(Store $store)
    {
        $this->model = $store;
    }

    public function all(){
        return $this->model->latest()->get();
    }

    public function find($id){
        return $this->model->findOrFail($id);
    }

    public function create($data){
        return $this->model->create($data);
    }

    public function update($id, $data){
        //
    }

    public function delete($id){
        return $this->model->destroy($id);
    }
}