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

    public function getNomorSoal()
    {
        $this->soalTes->all('nomor_soal');
    }

    public function getAll()
    {
        return $this->soalTes->orderBy('nomor_soal', 'asc')->get();
    }

    public function getAllKategori1()
    {
        return $this->soalTes->where('id_kategori', 1)->orderBy('nomor_soal', 'asc')->get();
    }

    public function getAllKategori2()
    {
        return $this->soalTes->where('id_kategori', 2)->orderBy('nomor_soal', 'asc')->get();
    }

    public function getAllKategori3()
    {
        return $this->soalTes->where('id_kategori', 3)->orderBy('nomor_soal', 'asc')->get();
    }

    public function getSoalForPeserta()
    {
        return $this->soalTes->orderBy('nomor_soal', 'asc')->paginate(1);
    }

    public function getSoalKategori1()
    {
        return $this->soalTes->with(['subKategoriSoal'])->where('id_kategori', 1)->orderBy('nomor_soal', 'asc')->paginate(1);
    }

    public function getSoalKategori2()
    {
        return $this->soalTes->with(['subKategoriSoal'])->where('id_kategori', 2)->orderBy('nomor_soal', 'asc')->paginate(1);
    }

    public function getSoalKategori3()
    {
        return $this->soalTes->with(['subKategoriSoal'])->where('id_kategori', 3)->orderBy('nomor_soal', 'asc')->paginate(1);
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