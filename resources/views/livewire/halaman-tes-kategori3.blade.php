<div class="row no-margin no-padding">
    @include('partials.modal-konfirmasi-selesai-tes-kategori3')
    <div class="col-md-3 b-r b-grey sm-b-b full-height">
        <div class="py-3 pl-5 navigation-wrapper">
            <div class="row">
                @for ($nav = 0; $nav < count($quizNav); $nav++) @if ($nav % 5==0) </div>
                    <div class="row">
                        @endif
                        <div class="col-md-2 p-1">
                            <a href="?page={{ $nav+1 }}" class="btn btn-default btn-block m-t-5">
                                {{ $quizNav[$nav]
                                }}</a>
                        </div>
                        @endfor
                    </div>
            </div>
        </div>
    <div class="col-md-9 full-height p-5">
        <form id="formJawaban">
            <div class="row justify-content-between">
                <div class="col-md-4 no-padding">
                    {!! $daftarSoal->links() !!}
                </div>
                <div class="com-md-4 px-3 py-0 text-primary border">
                    <h5 id="timer"></h5>
                </div>
                <div class="col-md-4 no-padding">
                    <button class="btn text-primary btn-lg pull-right" type="button" data-toggle="modal"
                        data-target="#modalKonfirmasiSelesaiTesKategori3">Selesaikan</button>
                </div>
            </div>
            <div id="soal-tes" class="mt-5">
                @foreach ($daftarSoal as $soal)
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                <p class="font-arial fs-16">{{ $soal->nomor_soal }}. {{ $soal->subKategoriSoal->isi_subkategori }}</p>
                {{-- <input type="hidden" value="{{ $soal->id }}" wire:model='id_soal'> --}}
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios1" value='a'
                        wire:model='singleAnswer'>
                    <label class="form-check-label" for="exampleRadios1">
                        {{ $soal->pil_a }} <br>
                        @if (!is_null($soal->gambar_pil_a) || !empty($soal->gambar_pil_a))
                        <img src="{{ asset('storage/'.$soal->gambar_pil_a) }}" width="80" alt="pil_a">
                        @endif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios2" value='b'
                        wire:model='singleAnswer'>
                    <label class="form-check-label" for="exampleRadios2">
                        {{ $soal->pil_b }} <br>
                        @if (!is_null($soal->gambar_pil_b) || !empty($soal->gambar_pil_b))
                        <img src="{{ asset('storage/'.$soal->gambar_pil_b) }}" width="80" alt="pil_b">
                        @endif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios3" value='c'
                        wire:model='singleAnswer'>
                    <label class="form-check-label" for="exampleRadios3">
                        {{ $soal->pil_c }} <br>
                        @if (!is_null($soal->gambar_pil_c) || !empty($soal->gambar_pil_c))
                        <img src="{{ asset('storage/'.$soal->gambar_pil_c) }}" width="80" alt="pil_c">
                        @endif
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios4" value='d'
                        wire:model='singleAnswer'>
                    <label class="form-check-label" for="exampleRadios4">
                        {{ $soal->pil_d }} <br>
                        @if (!is_null($soal->gambar_pil_d) || !empty($soal->gambar_pil_d))
                        <img src="{{ asset('storage/'.$soal->gambar_pil_d) }}" width="80" alt="pil_d">
                        @endif
                    </label>
                </div>
                @endforeach
            </div>
        </form>
    </div>
</div>
