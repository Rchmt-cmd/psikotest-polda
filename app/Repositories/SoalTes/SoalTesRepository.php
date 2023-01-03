<?php

namespace App\Repositories\SoalTes;

use App\Models\SoalTes;

class SoalTesRepository implements SoalTesInterface
{
    protected $soalTes;

    public function __construct(SoalTes $soalTes)
    {
        $this->soalTes = $soalTes;
    }

    public function getAll()
    {
        return $this->soalTes->all();
    }

    public function getSoalForPeserta()
    {
        return $this->soalTes->orderBy('nomor_soal', 'asc')->paginate(1);
    }

    public function create(array $value)
    {
        return $this->soalTes->create($value);
    }

    public function find($param, $id)
    {
        return $this->soalTes->where($param, $id)->get();
    }

    public function update($id, array $value)
    {
        return $this->soalTes->where('id', $id)->update($value);
    }

    public function delete($id)
    {
        return $this->soalTes->destroy($id);
    }
}