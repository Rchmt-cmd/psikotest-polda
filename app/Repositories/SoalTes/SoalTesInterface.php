<?php

namespace App\Repositories\SoalTes;

interface SoalTesInterface
{
    public function getAll();

    public function getNomorSoal();

    public function getSoalForPeserta();

    public function create(array $value);

    public function find($param, $id);

    public function update($id, array $value);

    public function delete($id);
}
