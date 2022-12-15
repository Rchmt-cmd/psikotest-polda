<div>
    <h2 class="text-primary text-center">Detail Data Peserta Tes Psikologi</h2>
    <br>
    <table>
        <tr>
            <td>Nama</td>
            <td>: {{ $idPeserta->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: {{ $idPeserta->email }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: {{ $idPeserta->password }}</td>
        </tr>
        <tr>
            <td>Nomor Tes</td>
            <td>: {{ $idPeserta->nomor_tes }}</td>
        </tr>
        <tr>
            <td>Status Tes</td>
            <td>: 
                @if($idPeserta->status_tes)
                    Selesai
                @else
                    Belum
                @endif
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{ $idPeserta->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>: {{ $idPeserta->tmpt_lahir }}, {{ $idPeserta->tgl_lahir }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{ $idPeserta->alamat }}</td>
        </tr>
        <tr>
            <td>No. Hp</td>
            <td>: {{ $idPeserta->no_hp }}</td>
        </tr>
    </table>
</div>
