<div class="row no-margin no-padding">
    @include('partials.modal-konfirmasi-selesai-tes')
    @include('partials.modal-flyout-nav')

    <div class="col-md-3 b-r b-grey sm-b-b full-height nav-soal">
        <div class="py-3 pl-5 navigation-wrapper">
            <div class="row">
                @for ($nav = 0; $nav < count($quizNav); $nav++) @if ($nav % 5==0) </div>
                    <div class="row">
                        @endif
                        <div class="col-md-2 p-1">
                            <a href="?page={{ $nav+1 }}" class="btn btn-default 
                            @if ($quizNav[$nav][1])
                            bg-success text-white 
                            @endif
                            btn-block m-t-5">
                                {{ $quizNav[$nav][0]
                                }}</a>
                        </div>
                        @endfor
                    </div>
            </div>
        </div>

        <div class="col-md-9 full-height p-5">
            <form id="formJawaban">
                <div class="row justify-content-between">
                    <div class="col-md-4 no-padding" style="width: 38%">
                        {!! $daftarSoal->links() !!}
                    </div>
                    <div class="com-md-4 px-3 py-0 text-primary border">
                        <h5 id="timer"></h5>
                    </div>
                    <div class="col-md-4 no-padding" style="width: 28%">
                        <button class="btn text-primary btn-lg pull-right" type="button" data-toggle="modal"
                            data-target="#modalKonfirmasiSelesaiTes">Selesaikan</button>
                    </div>
                </div>
                <button class="btn btn-lg btn-rounded bg-primary pull-right nav-soal-flyout" type="button" data-toggle="modal"
                    data-target="#modalFlyoutNav"><i class="material-icons text-white semi-bold">
                        format_list_numbered
                    </i>
                </button>
                <div id="soal-tes" class="mt-5">
                    @foreach ($daftarSoal as $soal)
                    @if (!is_null($soal->subKategoriSoal))
                        <b class="font-arial fs-16">{{ $soal->subKategoriSoal->deskripsi_subkategori }}</b><br>
                        @if (!empty($soal->subKategoriSoal->gambar_subkategori))
                            <center>
                                <img class="img_soal" src="{{ asset('storage/'.$soal->subKategoriSoal->gambar_subkategori) }}" alt="gambar_chapter" srcset="">
                            </center>
                        @endif
                        <p class="font-arial fs-16">{{ $soal->subKategoriSoal->isi_subkategori }}</p><br>
                    @endif
                    @if ($soal->gambar_soal)
                        <img class="img_soal" src="{{ asset('storage/'.$soal->gambar_soal) }}" alt="gambar_soal">
                    @endif
                    <p class="font-arial fs-16">{{ $soal->nomor_soal }}. {{ $soal->isi_soal }}</p>
                    {{-- <input type="hidden" value="{{ $soal->id }}" wire:model='id_soal'> --}}
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios1"
                            value='a' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios1">
                            {{ $soal->pil_a }} <br>
                            @if ($soal->gambar_pil_a)
                            <img class="img_soal" src="{{ asset('storage/'.$soal->gambar_pil_a) }}" alt="pil_a">
                            @endif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios2"
                            value='b' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios2">
                            {{ $soal->pil_b }} <br>
                            @if ($soal->gambar_pil_b)
                            <img class="img_soal" src="{{ asset('storage/'.$soal->gambar_pil_b) }}" alt="pil_b">
                            @endif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios3"
                            value='c' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios3">
                            {{ $soal->pil_c }} <br>
                            @if ($soal->gambar_pil_c)
                            <img class="img_soal" src="{{ asset('storage/'.$soal->gambar_pil_c) }}" alt="pil_c">
                            @endif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios4"
                            value='d' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios4">
                            {{ $soal->pil_d }} <br>
                            @if ($soal->gambar_pil_d)
                            <img class="img_soal" src="{{ asset('storage/'.$soal->gambar_pil_d) }}" alt="pil_d">
                            @endif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios5"
                            value='e' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios5">
                            {{ $soal->pil_e }} <br>
                            @if ($soal->gambar_pil_e)
                            <img class="img_soal" src="{{ asset('storage/'.$soal->gambar_pil_e) }}" alt="pil_e">
                            @endif
                        </label>
                    </div>
                    @endforeach
                </div>
            </form>
        </div>
        <script>
            let time = new Date(@js($timer)).getTime(); // This is the time allowed
            let saved_countdown = localStorage.getItem('saved_countdown1');
                    
            if(saved_countdown == null) {
                // Set the time we're counting down to using the time allowed
                let new_countdown = time;    
                time = new_countdown;
                localStorage.setItem('saved_countdown1', new_countdown);
            } else {
                time = saved_countdown;
            }
            
            function padWithLeadingZeros(num, totalLength) {
                return String(num).padStart(totalLength, '0');
            }
            // Update the count down every 1 second
            let x = setInterval(() => {
                // Get today's date and time
                let now = new Date().getTime();
                // Find the distance between now and the allowed time
                let distance = time - now;            
                console.log(distance)
                // Time counter
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("timer").innerHTML = padWithLeadingZeros(hours, 2) + ":" + padWithLeadingZeros(minutes, 2) + ":" + padWithLeadingZeros(seconds, 2);
                            
                // If the count down is over, write some text 
                if (distance <= 0) {
                    clearInterval(x);
                    localStorage.removeItem('saved_countdown1');
                    window.livewire.emit('storeHasilTest');
                }
            }, 1000);
        </script>
    </div>