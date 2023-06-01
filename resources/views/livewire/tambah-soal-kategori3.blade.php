<div>
    <form role="form" id="formTambahSoalKategori3" wire:submit.prevent='store'>
        @csrf
        <div class="row">
            <div class="col-md-3">
                <div class="form-group form-group-default">
                    <label>No. Soal</label>
                    <input type="number" class="form-control @error('nomor_soal') is-invalid @enderror"
                        wire:model='nomor_soal' required>
                    <input type="hidden" name="id_kategori" wire:model='id_kategori'>
                    @error('nomor_soal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-9 d-flex">
                <div class="form-group form-group-default">
                    <label>Pilihan A</label>
                    <input type="text" class="form-control @error('pil_a') is-invalid @enderror" wire:model='pil_a'>
                    @error('pil_a')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group form-group-default">
                    <label>Pilihan B</label>
                    <input type="text" class="form-control @error('pil_b') is-invalid @enderror" wire:model='pil_b'>
                    @error('pil_b')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group form-group-default">
                    <label>Pilihan C</label>
                    <input type="text" class="form-control @error('pil_c') is-invalid @enderror" wire:model='pil_c'>
                    @error('pil_c')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group form-group-default">
                    <label>Pilihan D</label>
                    <input type="text" class="form-control @error('pil_d') is-invalid @enderror" wire:model='pil_d'>
                    @error('pil_d')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-group-lg">
                    <label>Chapter Soal</label>
                    <select name="chapter" id="chapter" class="form-control custom-select full-width @error('chapter_soal') is-invalid @enderror" wire:model='chapter_soal'>
                        <option value="">-- Pilih chapter soal/kosongkan jika tidak ada --</option>
                        @foreach ($daftarChapterKategori3 as $chapter)
                        <option value={{ $chapter->id }}>{{ $chapter->deskripsi_subkategori }} ({{ $chapter->isi_subkategori }})</option>
                        @endforeach
                        @error('chapter_soal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-group-lg">
                    <label for="">Jawaban</label>
                    <div class="form-check form-check border d-flex justify-content-around p-2 @error('jawaban') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios1" value='a'
                            wire:model='jawaban'>
                        <label class="form-check-label" for="exampleRadios1">A</label>

                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios2" value='b'
                            wire:model='jawaban'>
                        <label class="form-check-label" for="exampleRadios2">B</label>

                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios3" value='c'
                            wire:model='jawaban'>
                        <label class="form-check-label" for="exampleRadios3">C</label>

                        <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios4" value='d'
                            wire:model='jawaban'>
                        <label class="form-check-label" for="exampleRadios4">D</label>
                    </div>
                    @error('jawaban')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Tambahkan Soal</button>
    </form>
</div>