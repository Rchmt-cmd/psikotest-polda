<div>
    <form role="form" id="formEditPeserta" wire:submit.prevent='update'>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group form-group-default">
                    <label>Nama</label>
                    <input type="text" class="form-control" wire:model='nama' required>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group form-group-default">
                    <label>No. Telepon</label>
                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror" wire:model='no_hp' required>
        
                    @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                        <p class="fs-12 text-danger">{{ $message }}</p>
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="form-group form-group-default">
            <label>No. Tes</label>
            <input type="text" class="form-control" wire:model='nomor_tes' required>
        </div>
        
        <div class="form-group form-group-default">
            <label>Jadwal</label>
            <select name="jadwal" id="jadwal" class="form-control custom-select full-width" wire:model='jadwal_tes' required>
                <option value="">-- Pilih jadwal tes peserta --</option>
                @foreach ($daftar_jadwals as $daftar_jadwal)
                <option value="{{ $daftar_jadwal->id }}"><b>Tanggal: </b>{{ $daftar_jadwal->tanggal_tes }} <b>Waktu: </b>{{
                    date('H:i', strtotime($daftar_jadwal->waktu_mulai_akses)) }} - {{ date('H:i',
                    strtotime($daftar_jadwal->waktu_selesai_akses)) }} WITA</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary pull-right" type="submit">Edit</button>
    </form>
</div>