<div class="row no-margin no-padding">
    @include('partials.modal-konfirmasi-selesai-tes-kategori3')
    @include('partials.modal-flyout-nav3')

        <div class="col-md-12 full-height p-5">
            <form id="formJawaban">
                <div class="row justify-content-between">
                    <div class="col-md-4 no-padding" style="width: 38%">
                        {{-- {!! $daftarSoal->links() !!} --}}
                    </div>
                    <div class="com-md-4 px-3 py-0 text-primary border">
                        <h5 id="timer"></h5>
                    </div>
                    <div class="col-md-4 no-padding" style="width: 28%">
                        <button class="btn text-primary btn-lg pull-right" type="button" data-toggle="modal"
                            data-target="#modalKonfirmasiSelesaiTesKategori3">Selesaikan</button>
                    </div>
                </div>
                <div class="row justify-content-between mt-5">
                    <div class="col-md-8 m-auto">
                        @foreach ($daftarSoal as $soal)
                        @php
                            $kolom = str_split($soal->subKategoriSoal->isi_subkategori);
                            $soal = str_split($soal->isi_soal);
                        @endphp
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                                <tr>
                                    <td colspan="5" class="bg-success text-white p-0"><h4>
                                        <center>Pernyataan</center>
                                    </h4></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><p class="fs-16"><center>{{ $kolom[0] }}</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $kolom[1] }}</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $kolom[2] }}</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $kolom[3] }}</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $kolom[4] }}</center></p></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><p class="fs-16"><center>A</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>B</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>C</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>D</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>E</center></p></td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="bg-danger text-white p-0"><h4>
                                        <center>Soal</center>
                                    </h4></td>
                                </tr>
                                <tr>
                                    <td class="p-0"><p class="fs-16"><center></center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $soal[0] }}</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $soal[1] }}</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $soal[2] }}</center></p></td>
                                    <td class="p-0"><p class="fs-16"><center>{{ $soal[3] }}</center></p></td>
                                </tr>
                            </table>
                        </div>
                        <div class="mt-5 row justify-content-between">
                            <div class="col-md-2">
                                <div class="card form-check text-black bg-light mb-3 ">
                                    <div class="card-body">
                                        <input class="form-check-input" type="radio" id="exampleRadios1" value='a'
                                            wire:model='singleAnswer'>
                                        <label class="form-check-label w-100" for="exampleRadios1">
                                            <p class="fs-16">A</p> <br>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card form-check text-black bg-light mb-3 ">
                                    <div class="card-body">
                                        <input class="form-check-input" type="radio" id="exampleRadios2" value='b'
                                            wire:model='singleAnswer'>
                                        <label class="form-check-label w-100" for="exampleRadios2">
                                            <p class="fs-16">B</p> <br>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card form-check text-black bg-light mb-3 ">
                                    <div class="card-body">
                                        <input class="form-check-input" type="radio" id="exampleRadios3" value='c'
                                            wire:model='singleAnswer'>
                                        <label class="form-check-label w-100" for="exampleRadios3">
                                            <p class="fs-16">C</p> <br>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card form-check text-black bg-light mb-3 ">
                                    <div class="card-body">
                                        <input class="form-check-input" type="radio" id="exampleRadios4" value='d'
                                            wire:model='singleAnswer'>
                                        <label class="form-check-label w-100" for="exampleRadios4">
                                            <p class="fs-16">D</p> <br>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card form-check text-black bg-light mb-3 ">
                                    <div class="card-body">
                                        <input class="form-check-input" type="radio" id="exampleRadios5" value='e'
                                            wire:model='singleAnswer'>
                                        <label class="form-check-label w-100" for="exampleRadios4">
                                            <p class="fs-16">E</p> <br>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </form>
        </div>
        <script defer>
            let time = new Date(@js($timer)).getTime(); // This is the time allowed
                        let saved_countdown = localStorage.getItem('saved_countdown3');
                                
                        if(saved_countdown == null) {
                            // Set the time we're counting down to using the time allowed
                            let new_countdown = time;    
                            time = new_countdown;
                            localStorage.setItem('saved_countdown3', new_countdown);
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
                                localStorage.removeItem('saved_countdown3');
                                window.livewire.emit('updatedSingleAnswer');
                            }
                        }, 1000);
        </script>
    </div>