<?php

namespace App\Http\Livewire;

use App\Models\SoalTes;
use App\Models\SubKategoriSoal;
use Livewire\Component;

class EditSoalKategori3 extends Component
{
    public $dataSoalKategori3;
    public $daftarChapterKategori3;

    public $nomor_soal;
    public $id_kategori;
    public $id_subkategori;
    public $isi_soal;
    public $dig_1;
    public $dig_2;
    public $dig_3;
    public $dig_4;
    public $jawaban;
    
    protected $soalKategori3;
    protected $subKategoriSoal;
    
    protected $listeners = [
        'editSoalKategori3'
    ];
    
    public function boot(SoalTes $soalKategori3, SubKategoriSoal $subKategoriSoal)
    {
        $this->soalKategori3 = $soalKategori3;
        $this->subKategoriSoal = $subKategoriSoal;
    }
    
    public function resetField()
    {
        $this->nomor_soal = '';
        $this->dig_1 = '';
        $this->dig_2 = '';
        $this->dig_3 = '';
        $this->dig_4 = '';
        $this->jawaban = '';
        $this->id_subkategori = '';
    }
    
    public function editSoalKategori3()
    {
        $soal = str_split($this->dataSoalKategori3->isi_soal);
        $this->nomor_soal = $this->dataSoalKategori3->nomor_soal;
        $this->id_kategori = $this->dataSoalKategori3->id_kategori;
        $this->isi_soal = $this->dataSoalKategori3->isi_soal;
        $this->dig_1 = $soal[0];
        $this->dig_2 = $soal[1];
        $this->dig_3 = $soal[2];
        $this->dig_4 = $soal[3];
        $this->jawaban = $this->dataSoalKategori3->jawaban;
        $this->id_subkategori = $this->dataSoalKategori3->id_subkategori;
    }

    public function update()
    {
        $soal = [
            'isi_soal' => $this->dig_1 . $this->dig_2 . $this->dig_3 . $this->dig_4
        ];

        $validatedData = $this->validate(
            [
                'nomor_soal' => 'required|unique_with:soal_tes,id_kategori,' . $this->nomor_soal .  '= nomor_soal',
                'jawaban' => 'required',
                'dig_1' => 'required|max:1',
                'dig_2' => 'required|max:1',
                'dig_3' => 'required|max:1',
                'dig_4' => 'required|max:1',
                'id_subkategori' => 'required'
            ]
        );

        unset($validatedData['dig_1']);
        unset($validatedData['dig_2']);
        unset($validatedData['dig_3']);
        unset($validatedData['dig_4']);
        $this->soalKategori3->where('id', $this->dataSoalKategori3->id)->update(array_merge($validatedData, $soal));
        $this->resetField();
        $this->emit('dataSoal3Updated');
    }
    public function render()
    {
        $this->daftarChapterKategori3 = $this->subKategoriSoal->where('id_kategori', 3)->get();
        // dd($this->dataSoalKategori3);
        return view('livewire.edit-soal-kategori3');
    }
}
