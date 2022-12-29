<div>
    <div class="row">
        <div class="col-md-12">
            <form role="form" id="formTambahSoal" wire:submit.prevent='store'>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group form-group-default">
                            <label>No. Soal</label>
                            <input type="number" class="form-control" wire:model='nomor_soal' required>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group form-group-lg">
                            <label>Isi Soal</label>
                            <textarea class="form-control" name="isi-soal" id="isi-soal" cols="20" rows="10" wire:model='isi_soal' required></textarea>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <span class="hint-text">Ketikkan pilihan jawaban atau upload gambar</span>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan A</label>
                            <input type="text" class="form-control" wire:model='pil_a' >
                            <input type="file" class="form-control" wire:model='gambar_pil_a' >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan B</label>
                            <input type="text" class="form-control" wire:model='pil_b' >
                            <input type="file" class="form-control" wire:model='gambar_pil_b' >
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan C</label>
                            <input type="text" class="form-control" wire:model='pil_c' >
                            <input type="file" class="form-control" wire:model='gambar_pil_c' >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan D</label>
                            <input type="text" class="form-control" wire:model='pil_d' >
                            <input type="file" class="form-control" wire:model='gambar_pil_d' >
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Jawaban</label>
                            <input type="text" class="form-control" wire:model='jawaban' required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group form-group-default">
                            <label>Bobot</label>
                            <input type="number" class="form-control" wire:model='bobot' required>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-primary pull-right" type="submit">Tambahkan</button>
            </form>
        </div>
    </div>
</div>