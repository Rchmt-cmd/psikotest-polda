<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\User\UserInterface;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {
        return $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->where('is_admin', '!=', 1)->get();
    }

    public function create(array $value)
    {
        return $this->user->create($value);
    }

    public function find($param, $id)
    {
        return $this->user->where($param, $id)->get();
    }

    public function update($id, array $value)
    {
        return $this->user->where('id', $id)->update($value);
    }

    public function delete($id)
    {
        return $this->user->destroy($id);
    }
}