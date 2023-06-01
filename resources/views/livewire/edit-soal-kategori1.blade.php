<div>
    <form role="form" id="formEditSoalKategori1" wire:submit='update'>
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
                            <textarea class="form-control" name="isi-soal" id="isi-soal" cols="20" rows="10"
                                wire:model='isi_soal' required></textarea>
                            <input type="file" class="form-control" wire:model='gambar_soal'>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label>Chapter Soal</label>
                            <select name="chapter" id="chapter" class="form-control custom-select full-width"
                                wire:model='chapter_soal'>
                                <option value="">-- Pilih chapter soal/kosongkan jika tidak ada --</option>
                                @foreach ($daftar_chapter as $chapter)
                                <option value={{ $chapter->id }}>{{ $chapter->deskripsi_subkategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="hint-text">Ketikkan pilihan jawaban atau upload gambar</span>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan A</label>
                            <input type="text" class="form-control" wire:model='pil_a'>
                            <input type="file" class="form-control" wire:model='gambar_pil_a'>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan B</label>
                            <input type="text" class="form-control" wire:model='pil_b'>
                            <input type="file" class="form-control" wire:model='gambar_pil_b'>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan C</label>
                            <input type="text" class="form-control" wire:model='pil_c'>
                            <input type="file" class="form-control" wire:model='gambar_pil_c'>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan D</label>
                            <input type="text" class="form-control" wire:model='pil_d'>
                            <input type="file" class="form-control" wire:model='gambar_pil_d'>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-lg">
                            <label>Pilihan E</label>
                            <input type="text" class="form-control" wire:model='pil_e'>
                            <input type="file" class="form-control" wire:model='gambar_pil_e'>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{-- <div class="form-group form-group-lg">
                            <label for="">Jawaban</label>
                            <div class="form-check form-check border d-flex justify-content-around p-2">
                                <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios1"
                                    value='a' wire:model='jawaban'>
                                <label class="form-check-label" for="exampleRadios1">A</label>

                                <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios2"
                                    value='b' wire:model='jawaban'>
                                <label class="form-check-label" for="exampleRadios2">B</label>

                                <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios3"
                                    value='c' wire:model='jawaban'>
                                <label class="form-check-label" for="exampleRadios3">C</label>

                                <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios4"
                                    value='d' wire:model='jawaban'>
                                <label class="form-check-label" for="exampleRadios4">D</label>

                                <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios5"
                                    value='e' wire:model='jawaban'>
                                <label class="form-check-label" for="exampleRadios5">E</label>
                            </div>
                        </div> --}}
                        
                        <div class="form-group form-group-lg">
                            <label for="">Jawaban</label>
                            <div class="border d-flex justify-content-around p-2">
                                <div class="form-check">
                                    <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban'
                                        id="defaultradio1" value="a">
                                    <label for="defaultradio1">
                                        A
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban'
                                        id="defaultradio2" value="b">
                                    <label for="defaultradio2">
                                        B
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban'
                                        id="defaultradio3" value="c">
                                    <label for="defaultradio3">
                                        C
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban'
                                        id="defaultradio4" value="d">
                                    <label for="defaultradio4">
                                        D
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="@error('jawaban') is-invalid @enderror" type="radio" name="jawaban" wire:model='jawaban'
                                        id="defaultradio5" value="e">
                                    <label for="defaultradio5">
                                        E
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
                </div>
            </div>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Update Soal</button>
    </form>
</div>