<div>
    <form role="form" id="formEditPeserta" wire:submit.prevent='update'>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group form-group-default">
                    <label>Nama</label>
                    <input type="text" class="form-control" wire:model='nama' required>
                </div>
            </div>
            <div class="col-sm-3 px-2">
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" id="lakiRadio" wire:model='jenis_kelamin' value="L">
                    <label for="lakiRadio">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input type="radio" name="jenis_kelamin" id="perempuanRadio" wire:model='jenis_kelamin' value="P">
                    <label for="perempuanRadio">
                        Perempuan
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group form-group-default">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" wire:model='tmpt_lahir' required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-group-default">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" wire:model='tgl_lahir' required>
                </div>
            </div>
        </div>

        <div class="form-group form-group-default ">
            <label>Alamat</label>
            <input type="text" class="form-control" wire:model='alamat' required>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group form-group-default">
                    <label>E-mail</label>
                    <input type="email" class="form-control" placeholder="ex: contoh@gmail.com" wire:model='email'
                        required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-group-default">
                    <label>No. Telepon</label>
                    <input type="number" class="form-control" wire:model='no_hp' required>
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
                <option value="{{ $daftar_jadwal->id }}"><b>Tanggal: </b>{{ $daftar_jadwal->tanggal_tes }} <b>Waktu: </b>{{ date('H:i', strtotime($daftar_jadwal->waktu_mulai_akses)) }} - {{ date('H:i',
                strtotime($daftar_jadwal->waktu_selesai_akses)) }} WITA</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary pull-right" type="submit">Edit</button>
    </form>
</div>