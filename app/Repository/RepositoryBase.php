<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class RepositoryBase
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function store(array $data): Model
    {
        return $this->model->create($data);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find(string $id): ?Model
    {
        return $this->model->find($id);
    }

    public function delete(string $id, Model $model): bool
    {
        return $model->delete($id);
    }

    public function update(array $data, Model $model): Model
    {
        $model->update($data);
        return $model;
    }
}
