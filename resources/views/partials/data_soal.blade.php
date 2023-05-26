<div>
  @foreach ($daftarSoal as $soal)
  @php
  $soal_char = str_split($soal->subKategoriSoal->isi_subkategori)
  @endphp
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr>
        <td>
          <p class="fs-16">
            <center>{{ $soal_char[0] }}</center>
          </p>
        </td>
        <td>
          <p class="fs-16">
            <center>{{ $soal_char[1] }}</center>
          </p>
        </td>
        <td>
          <p class="fs-16">
            <center>{{ $soal_char[2] }}</center>
          </p>
        </td>
        <td>
          <p class="fs-16">
            <center>{{ $soal_char[3] }}</center>
          </p>
        </td>
        <td>
          <p class="fs-16">
            <center>{{ $soal_char[4] }}</center>
          </p>
        </td>
      </tr>
    </table>
  </div>
  <div class="mt-5 row justify-content-around">
    <div class="col-md-4">
      <div class="card form-check text-black bg-light mb-3 ">
        <div class="card-body">
          <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios1" value='a'
            wire:model='singleAnswer'>
          <label class="form-check-label w-100" for="exampleRadios1">
            <p class="fs-16">{{ $soal->pil_a }}</p> <br>
          </label>
        </div>
      </div>
      <div class="card form-check text-black bg-light mb-3 ">
        <div class="card-body">
          <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios2" value='b'
            wire:model='singleAnswer'>
          <label class="form-check-label w-100" for="exampleRadios2">
            <p class="fs-16">{{ $soal->pil_b }}</p> <br>
          </label>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card form-check text-black bg-light mb-3 ">
        <div class="card-body">
          <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios3" value='c'
            wire:model='singleAnswer'>
          <label class="form-check-label w-100" for="exampleRadios3">
            <p class="fs-16">{{ $soal->pil_c }}</p> <br>
          </label>
        </div>
      </div>
      <div class="card form-check text-black bg-light mb-3 ">
        <div class="card-body">
          <input class="form-check-input" type="radio" name="{{ $soal->id }}" id="exampleRadios4" value='d'
            wire:model='singleAnswer'>
          <label class="form-check-label w-100" for="exampleRadios4">
            <p class="fs-16">{{ $soal->pil_d }}</p> <br>
          </label>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>