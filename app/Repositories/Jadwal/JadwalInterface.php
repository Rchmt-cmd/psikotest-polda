<?php
namespace App\Repositories\Jadwal;

interface JadwalInterface
{
    public function getAll();

    public function update($id, array $value);

    public function create(array $value);

    public function find($param, $id);

    public function delete($id);
}