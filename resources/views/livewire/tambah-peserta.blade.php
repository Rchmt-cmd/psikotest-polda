<div>
    <form role="form" id="formTambahPeserta" wire:submit.prevent='store'>
        <div class="row px-1">
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

        <div class="row px-1">
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


        <div class="form-group form-group-default">
            <label>No. Tes</label>
            <input type="text" class="form-control" wire:model='nomor_tes' required>
        </div>

        <div class="row px-1">
            <div class="col-sm-6">
                <div class="form-group form-group-default">
                    <label>E-mail</label>
                    <input type="email" class="form-control" placeholder="ex: contoh@gmail.com" wire:model='email' required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-group-default">
                    <label>No. Telepon</label>
                    <input type="number" class="form-control" wire:model='no_hp' required>
                </div>
            </div>
        </div>

        <div class="form-group form-group-default ">
            <label>Alamat</label>
            <input type="text" class="form-control" wire:model='alamat' required>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Tambahkan</button>
    </form>
</div>