<div class="row full-height no-margin p-5">
    <div class="col-md-12 full-height p-5 overflow-auto">
        <form action="{{ route('submit.jawaban') }}" method="POST" id="formJawaban">
            @foreach ($daftarSoal as $soal)
            <p class="font-arial fs-16">{{ $soal->nomor_soal }}. {{ $soal->isi_soal }}</p>
            <input type="hidden" value="{{ $soal->id }}">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios1" value="{{ $soal->pil_a }}">
                <label class="form-check-label" for="exampleRadios1">
                    {{ $soal->pil_a }}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios2" value="{{ $soal->pil_a }}">
                <label class="form-check-label" for="exampleRadios2">
                    {{ $soal->pil_b }}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios3" value="{{ $soal->pil_a }}">
                <label class="form-check-label" for="exampleRadios3">
                    {{ $soal->pil_c }}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios4" value="{{ $soal->pil_a }}">
                <label class="form-check-label" for="exampleRadios4">
                    {{ $soal->pil_d }}
                </label>
            </div>
            @endforeach
            <button class="btn btn-primary pull-right" type="submit">Akhiri Test</button>
        </form>
        {{ $daftarSoal->links() }}
    </div>
</div>