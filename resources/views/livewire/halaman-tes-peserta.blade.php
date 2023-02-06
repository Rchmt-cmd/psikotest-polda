<div class="row full-height no-margin no-padding soal-wrapper">
    @include('partials.modal-konfirmasi-selesai-tes')
    <div class="col-md-3 b-r b-grey sm-b-b full-height">
        <div class="py-3 pl-5 navigation-wrapper">
            <div class="row">
                @for ($nav = 0; $nav < count($quizNav); $nav++) @if ($nav % 5==0) </div>
                    <div class="row">
                        @endif
                        <div class="col-md-2 p-1">
                                <a href="?page={{ $quizNav[$nav] }}" class="btn btn-default btn-block m-t-5">
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
                            data-target="#modalKonfirmasiSelesaiTes">Akhiri Test</button>
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
                            {{ $soal->pil_a }} <br>
                            @if (!is_null($soal->gambar_pil_a) || !empty($soal->gambar_pil_a))
                            <img src="{{ asset('storage/'.$soal->gambar_pil_a) }}" width="80" alt="pil_a">
                            @endif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios2"
                            value='b' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios2">
                            {{ $soal->pil_b }} <br>
                            @if (!is_null($soal->gambar_pil_b) || !empty($soal->gambar_pil_b))
                            <img src="{{ asset('storage/'.$soal->gambar_pil_b) }}" width="80" alt="pil_b">
                            @endif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios3"
                            value='c' wire:model='singleAnswer'>
                        <label class="form-check-label" for="exampleRadios3">
                            {{ $soal->pil_c }} <br>
                            @if (!is_null($soal->gambar_pil_c) || !empty($soal->gambar_pil_c))
                            <img src="{{ asset('storage/'.$soal->gambar_pil_c) }}" width="80" alt="pil_c">
                            @endif
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios4"
                            value='d' wire:model='singleAnswer'>
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
        <script>
            let time = new Date(@js($timer)).getTime(); // This is the time allowed
            let saved_countdown = localStorage.getItem('saved_countdown');
            
            if(saved_countdown == null) {
                // Set the time we're counting down to using the time allowed
                let new_countdown = time;
            
                time = new_countdown;
                localStorage.setItem('saved_countdown', new_countdown);
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
                document.getElementById("timer").innerHTML = padWithLeadingZeros(hours, 2) + ":"
                + padWithLeadingZeros(minutes, 2) + ":" + padWithLeadingZeros(seconds, 2);
                    
                // If the count down is over, write some text 
                if (distance <= 0) {
                    clearInterval(x);
                    localStorage.removeItem('saved_countdown');
                    window.livewire.emit('storeHasilTest');
                }
            }, 1000);
        </script>

        {{-- <script>
            const futureDate = new Date(@js($timer)).getTime();
            function padWithLeadingZeros(num, totalLength) {
                return String(num).padStart(totalLength, '0');
            }
            setInterval(() =>{
                const now = new Date().getTime();
                const timeleft = futureDate - now;
                
                const hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
                
                document.getElementById("timer").innerHTML = padWithLeadingZeros(hours, 2) + ":"
                + padWithLeadingZeros(minutes, 2) + ":" + padWithLeadingZeros(seconds, 2);
            },1000)
        </script> --}}
    </div>