<div>
    <form role="form" id="formEditChapterKategori3" wire:submit.prevent='update'>
        @csrf
        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="form-group form-group-default">
                    <input type="number" placeholder="Nomor Kolom"
                        class="form-control  @error('deskripsi') is-invalid @enderror" wire:model='deskripsi'>
                    @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-9 d-flex">
                <div class="form-group form-group-default">
                    <input type="text" placeholder="digit 1" class="form-control  @error('digit1') is-invalid @enderror"
                        wire:model='digit1'>
                    @error('digit1')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                </div>
                <div class="form-group form-group-default">
                    <input type="text" placeholder="digit 2" class="form-control @error('digit2') is-invalid @enderror"
                        wire:model='digit2'>
                    @error('digit2')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                </div>
                <div class="form-group form-group-default">
                    <input type="text" placeholder="digit 3" class="form-control @error('digit3') is-invalid @enderror"
                        wire:model='digit3'>
                    @error('digit3')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                </div>
                <div class="form-group form-group-default">
                    <input type="text" placeholder="digit 4" class="form-control @error('digit4') is-invalid @enderror"
                        wire:model='digit4'>
                    @error('digit4')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                </div>
                <div class="form-group form-group-default">
                    <input type="text" placeholder="digit 5" class="form-control @error('digit5') is-invalid @enderror"
                        wire:model='digit5'>
                    @error('digit5')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Tambahkan Chapter</button>
    </form>
</div>