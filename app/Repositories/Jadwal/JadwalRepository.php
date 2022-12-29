<?php

namespace App\Repositories\Jadwal;

use App\Repositories\Jadwal\JadwalInterface;
use App\Models\Jadwal;

class JadwalRepository implements JadwalInterface
{
    protected $jadwalRepository;

    public function __construct(Jadwal $jadwalRepository)
    {
        $this->jadwalRepository = $jadwalRepository;
    }

    public function getAll()
    {
        return $this->jadwalRepository->all();
    }

    public function create(array $value)
    {
        return $this->jadwalRepository->create($value);
    }

    public function update($id, array $value)
    {
        return $this->jadwalRepository->where('id', $id)->update($value);
    }

    public function find($param, $id)
    {
        return $this->jadwalRepository->where($param, $id)->get();
    }

    public function delete($id)
    {
        return $this->jadwalRepository->destroy($id);
    }
}