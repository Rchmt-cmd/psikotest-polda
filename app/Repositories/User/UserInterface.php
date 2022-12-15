<?php

namespace App\Repositories\User;

interface UserInterface {
    public function getAll();

    public function create(array $value);
    
    public function find($param, $id);
    
    public function update($id, array $value);
    
    public function delete($id);
}