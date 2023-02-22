<div>
    <h2 class="text-primary text-center">Detail Data Peserta Tes Psikologi</h2>
    <br>
    <table>
        <tr>
            <td>Nama</td>
            <td>: {{ $idPeserta->name }}</td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>: {{ $idPeserta->no_hp }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: {{ $idPeserta->old_password }}</td>
        </tr>
        <tr>
            <td>Nomor Tes</td>
            <td>: {{ $idPeserta->nomor_tes }}</td>
        </tr>
        <tr>
            <td>Jadwal Tes</td>
            <td>:
                @if($idPeserta->jadwal)
                    {{ $idPeserta->jadwal->tanggal_tes }} / {{ $idPeserta->jadwal->waktu_mulai }}-{{ $idPeserta->jadwal->waktu_selesai }} WITA
                @else
                    <i>Jadwal Terhapus</i>
                @endif 
            </td>
        </tr>
        <tr>
            <td>Status Tes</td>
            <td>: 
                @if($idPeserta->status_tes)
                    <i class="text-success">Selesai</i>
                @else
                    <i class="text-danger">Belum</i>
                @endif
            </td>
        </tr>
    </table>
</div>
