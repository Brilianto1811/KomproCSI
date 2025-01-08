<?php

namespace App\Repositories\Contracts;

interface CsiUserRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function getAllUsers();

    public function createUser(array $data);

    public function create(array $data);

    public function update($id, array $data);

    public function updatePassword($id, $password);

    public function delete($id);
}
