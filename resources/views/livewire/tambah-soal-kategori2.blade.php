<div>
    <form role="form" id="formTambahSoalKategori2" wire:submit='store'>
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
                            <textarea class="form-control @error('isi_soal') is-invalid @enderror" name="isi-soal" id="isi-soal" cols="20" rows="10"
                                wire:model='isi_soal' required></textarea>
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
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban' id="defaultradio1" value="a">
                        <label for="defaultradio1">
                            A. Sangat Setuju
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban' id="defaultradio2" value="b">
                        <label for="defaultradio2">
                            B. Setuju
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban' id="defaultradio3" value="c">
                        <label for="defaultradio3">
                            C. Tidak Setuju
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban' id="defaultradio4" value="d">
                        <label for="defaultradio4">
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