<div>
    <form role="form" id="formEditSoalKategori2" wire:submit.prevent='update'>
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-lg">
                            <label>Isi Soal</label>
                            <textarea class="form-control @error('isi_soal') is-invalid @enderror" name="isi-soal"
                                id="isi-soal" cols="20" rows="10" wire:model='isi_soal' required></textarea>
                            <input type="file" class="form-control" wire:model='gambar_soal'>
                            @error('isi_soal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-group-lg">
                    <label for="">Jawaban</label>
                    <div class="form-check">
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban"
                            wire:model='jawaban' id="jawaban1" value="a">
                        <label for="jawaban1">
                            A. Sangat Setuju
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban"
                            wire:model='jawaban' id="jawaban2" value="b">
                        <label for="jawaban2">
                            B. Setuju
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban"
                            wire:model='jawaban' id="jawaban3" value="c">
                        <label for="jawaban3">
                            C. Tidak Setuju
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban"
                            wire:model='jawaban' id="jawaban4" value="d">
                        <label for="jawaban4">
                            D. Sangat Tidak Setuju
                        </label>
                        @error('jawaban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Tambahkan Soal</button>
    </form>
</div>