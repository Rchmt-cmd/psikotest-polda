<div class="row full-height no-margin">
    <div class="col-md-12 no-padding full-height overflow-auto">
      <div class="full-height p-2">
        <div class="card card-default p-1">
          <div class="card-header">
            <div class="card-title">
              Daftar Hasil Tes
            </div>
            <div class="pull-right">
              <div class="col-xs-12">
                <input type="text" id="search-table-hasil-tes" class="form-control pull-right" placeholder="Search">
              </div>
            </div>
          </div>
    
          <div class="card-header">
            <div class="pull-left">
              <div class="col-xs-12">
                <h3 class="bold fs-16 no-margin font-montserrat">Total peserta yang menyelesaikan tes: <span class="light fs-16 no-margin">{{ $dataHasilTesPesertas->count() }} Orang</span></h3>
              </div>
            </div>
          </div>
    
          <div class="table-responsive">
            <table id="tableHasilTes" class="table table-hover" cellspacing="0" width="100%"
              aria-labeledly="tableWithSearch_info">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>No. Tes</th>
                  <th>Jadwal</th>
                  <th>Durasi Penyelesaian</th>
                  <th>Skor</th>
                  <th>Jumlah Benar</th>
                  {{-- <th></th> --}}
                </tr>
              </thead>
              <tbody>
                @forelse ($dataHasilTesPesertas as $dataHasilTes)
                  <tr>
                    <td class="fs-12">{{ $dataHasilTes->user->name }}</td>
                    <td class="fs-12">{{ $dataHasilTes->user->nomor_tes }}</td>
                    <td class="fs-12">{{ date('d F Y', strtotime($dataHasilTes->user->jadwal->tanggal_tes)) }}, {{ $dataHasilTes->user->jadwal->waktu_mulai_akses }} WITA</td>
                    <td class="fs-12">{{ date('H:i:s',strtotime($dataHasilTes->finish)) }} - {{ date('H:i:s',strtotime($dataHasilTes->start)) }}</td>
                    <td class="fs-12">{{ $dataHasilTes->hasil_akhir }}</td>
                    <td class="fs-12">{{ $dataHasilTes->jumlah_benar }} dari {{ $jumlahSoal }} Soal</td>
                    {{-- <td>
                      <div class="dropdown">
                        <a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button"
                          aria-expanded="false">
                          <i class="card-icon card-icon-settings "></i>
                        </a>
                  
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="card-settings">
                          <li><a href="#" data-toggle="modal" data-target="#modalEditSoal"><span class="material-icons fs-16">edit</span>
                              Edit</a></li>
                        </ul>
                      </div>
                    </td> --}}
                  </tr>
                @empty
                  <tr>
                    <td colspan="7" class="text-center">Tidak ada data soal</td>
                  </tr>
                @endforelse
                
              </tbody>
            </table>
          </div>
    
        </div>
      </div>
    </div>
</div>
