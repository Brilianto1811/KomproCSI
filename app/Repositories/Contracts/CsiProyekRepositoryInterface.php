<?php

namespace App\Repositories\Contracts;

interface CsiProyekRepositoryInterface
{
    public function getAll();
    public function getByUid(string $uid): ?object;  // Pastikan metode ini ada
    public function create(array $data): object;
    public function update(string $uid, array $data): bool;
    public function delete(string $uid): bool;
    public function getProyekValidasi(string $searchTerm = null);
    public function getProyekPublik(string $searchTerm = null);
    public function searchProyek(string $searchTerm);
    public function getProyekPublikHome(): \Illuminate\Database\Eloquent\Collection;
}
