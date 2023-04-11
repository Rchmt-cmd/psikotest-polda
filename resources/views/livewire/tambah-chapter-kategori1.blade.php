<div>
    <form role="form" id="formTambahChapter" wire:submit.prevent='store'>
        @csrf
        <div class="form-group form-group-lg">
            <label>Deskripsi Chapter</label>
            <input type="text" class="form-control" wire:model='deskripsi_chapter'>
        </div>
        <div class="form-group form-group-lg">
            <label>Isi Chapter</label>
            <textarea class="form-control" name="isi-chapter" id="isi-chapter" cols="20" rows="10"
                wire:model='isi_chapter' required></textarea>
            <input type="file" class="form-control" wire:model='gambar_chapter'>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Tambahkan Chapter</button>
    </form>
</div>