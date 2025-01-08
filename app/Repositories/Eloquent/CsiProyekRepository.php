<?php

namespace App\Repositories;

use App\Models\CsiProyek;

class CsiProyekRepository implements CsiProyekRepositoryInterface
{
    public function getAll()
    {
        return CsiProyek::all();
    }

    public function getById(int $id): ?object
    {
        return CsiProyek::find($id);
    }

    public function create(array $data): object
    {
        return CsiProyek::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $proyek = CsiProyek::find($id);
        if (!$proyek) {
            return false;
        }

        return $proyek->update($data);
    }

    public function delete(int $id): bool
    {
        $proyek = CsiProyek::find($id);
        if (!$proyek) {
            return false;
        }

        return $proyek->delete();
    }
}
