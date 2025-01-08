<?php

namespace App\Repositories\Eloquent;

use App\Models\CsiUser;
use App\Repositories\Contracts\CsiUserRepositoryInterface;

class CsiUserRepository implements CsiUserRepositoryInterface
{
    protected $model;

    public function __construct(CsiUser $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    // public function create(array $data)
    // {
    //     $data['password'] = bcrypt($data['password']); // Encrypt password
    //     return $this->model->create($data);
    // }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function getAllUsers()
    {
        return CsiUser::all();
    }

    public function createUser(array $data)
    {
        return CsiUser::create($data);
    }

    public function update($id, array $data)
    {
        $user = $this->getById($id);
        if ($user) {
            if (isset($data['password'])) {
                $data['password'] = bcrypt($data['password']);
            }
            $user->update($data);
            return $user;
        }
        return null;
    }

    public function updatePassword($id, $password)
    {
        $user = CsiUser::findOrFail($id);
        $user->password = bcrypt($password); // Hash password
        $user->save();
        return $user;
    }


    public function delete($id)
    {
        $user = $this->getById($id);
        if ($user) {
            $user->delete();
            return true;
        }
        return false;
    }
}
