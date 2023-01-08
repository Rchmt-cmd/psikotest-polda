<div class="row full-height no-margin no-padding">
    <div class="col-md-3 b-r b-grey sm-b-b full-height overflow-auto">
        <div class="py-3 pl-5">
            <div class="row">
                @for ($nav = 0; $nav < count($quizNav); $nav++) @if ($nav % 5==0) </div>
                    <div class="row">
                        @endif
                        <div class="col-md-2 p-1">
                            <div class="card p-1">
                                <a href="?page={{ $quizNav[$nav] }}" class="fs-12 text-center py-1">{{ $quizNav[$nav]
                                    }}</a>
                            </div>
                        </div>
                        @endfor
                    </div>
            </div>
        </div>
        <div class="col-md-9 full-height p-5 overflow-auto">
            <form id="formJawaban">
                <div class="row justify-content-between">
                    <div class="col-md-4 no-padding">
                        {!! $daftarSoal->links() !!}
                    </div>
                    <div class="com-md-4 no-padding">
                        <h5>00:00</h5>
                    </div>
                    <div class="col-md-4 no-padding">
                        <button class="btn text-primary btn-lg pull-right" type="submit">Akhiri Test</button>
                    </div>
                </div>
                <div id="soal-tes" class="mt-5">
                    @foreach ($daftarSoal as $soal)
                    <p class="font-arial fs-16">{{ $soal->nomor_soal }}. {{ $soal->isi_soal }}</p>
                    {{-- <input type="hidden" value="{{ $soal->id }}" wire:model='id_soal'> --}}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios1"
                            value='a' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios1">
                            {{ $soal->pil_a }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios2"
                            value='b' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios2">
                            {{ $soal->pil_b }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios3"
                            value='c' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios3">
                            {{ $soal->pil_c }}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios4"
                            value='d' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios4">
                            {{ $soal->pil_d }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>