<?php

namespace App\Repositories\Eloquent;

use App\Models\CsiProyek;
use App\Repositories\Contracts\CsiProyekRepositoryInterface;

class CsiProyekRepository implements CsiProyekRepositoryInterface
{
    public function getAll()
    {
        return CsiProyek::all();
    }

    public function getByUid(string $uid_proyek): ?object
    {
        return CsiProyek::where('uid_proyek', $uid_proyek)->first(); // Pastikan ini ada
    }

    public function create(array $data): object
    {
        return CsiProyek::create($data);
    }

    public function update(string $uid_proyek, array $data): bool
    {
        // Mencari proyek berdasarkan uid_proyek
        $proyek = CsiProyek::where('uid_proyek', $uid_proyek)->first();
        if (!$proyek) {
            return false; // Jika proyek tidak ditemukan, mengembalikan false
        }

        // Mengupdate proyek yang ditemukan dengan data baru
        return $proyek->update($data);
    }

    public function delete(string $uid_proyek): bool
    {
        // Mencari proyek berdasarkan uid_proyek
        $proyek = CsiProyek::where('uid_proyek', $uid_proyek)->first();
        if (!$proyek) {
            return false; // Jika proyek tidak ditemukan, mengembalikan false
        }

        // Menghapus proyek yang ditemukan
        return $proyek->delete();
    }
}
