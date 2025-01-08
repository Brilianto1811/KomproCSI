<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface CsiProyekRepositoryInterface
{
    public function getAll();
    public function getById(int $id): ?object;
    public function create(array $data): object;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
