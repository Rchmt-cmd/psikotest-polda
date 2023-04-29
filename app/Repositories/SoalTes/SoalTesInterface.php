<?php

namespace App\Repositories\SoalTes;

interface SoalTesInterface
{
    public function getAll();

    public function getAllKategori1();

    public function getAllKategori2();
    
    public function getAllKategori3();

    public function getNomorSoal();

    public function getSoalForPeserta();

    public function getSoalKategori1();

    public function getSoalKategori2();
    
    public function getSoalKategori3();

    public function create(array $value);

    public function find($param, $id);

    public function update($id, array $value);

    public function delete($id);
}
