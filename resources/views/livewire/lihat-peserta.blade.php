<div>
    <h2 class="text-primary text-center">Detail Data Peserta</h2>
    <br>
    <table class="table table-hover" width="100%" cellspacing='0'>
        <tr>
            <td><b>Nama</b></td>
            <td>:</td>
            <td>{{ $idPeserta->name }}</td>
        </tr>
        <tr>
            <td><b>Nomor HP</b></td>
            <td>:</td>
            <td>{{ $idPeserta->no_hp }}</td>
        </tr>
        <tr>
            <td><b>Password</b></td>
            <td>:</td>
            <td>{{ $idPeserta->old_password }}</td>
        </tr>
        <tr>
            <td><b>Nomor Tes</b></td>
            <td>:</td>
            <td>{{ $idPeserta->nomor_tes }}</td>
        </tr>
        <tr>
            <td><b>Jadwal Tes</b></td>
            <td>:</td>
            <td>                @if($idPeserta->jadwal)
                    {{ $idPeserta->jadwal->tanggal_tes }} ({{ $idPeserta->jadwal->waktu_mulai_akses }}-{{ $idPeserta->jadwal->waktu_selesai_akses }}) WITA
                @else
                    <i>Jadwal Terhapus</i>
                @endif 
            </td>
        </tr>
        <tr>
            <td><b>Status Tes</b></td>
            <td>:</td>
            <td>
                @if($idPeserta->status_tes)
                    <i class="text-success">Selesai</i>
                @else
                    <i class="text-danger">Belum</i>
                @endif
            </td>
        </tr>
    </table>
</div>
