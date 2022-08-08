<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  font-size:12;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
<?php

foreach ($data as $v) {
    echo <<<END
            <table class="" id="customers">
            <thead>
                <tr>
                    <td colspan="11">
                    <h3>Data Pasien</h3>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">No KK</th>
                    <th colspan="2">NIK</th>
                    <th colspan="2">Nama Pasien</th>
                    <th>Umur Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Tinggi Badan</th>
                    <th>Berat Badan</th>
                    <th>Nomor BPJS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">{$v->no_kk}</td>
                    <td colspan="2">{$v->nik}</td>
                    <td colspan="2">{$v->nama_pasien}</td>
                    <td>{$v->umur_pasien}</td>
                    <td>{$v->gender}</td>
                    <td>{$v->tinggi_badan}</td>
                    <td>{$v->berat_badan}</td>
                    <td>{$v->no_bpjs}</td>

                </tr>
            </tbody>
            <thead>
                <tr>
                    <td colspan="11" >
                        <h3>Riwayat Berobat</h3>
                    </td>
                </tr>
                <tr>
                    <th>Nama Pasien Berobat</th>
                    <th>S</th>
                    <th>O</th>
                    <th>A</th>
                    <th>P</th>
                    <th>Tanggal Berobat</th>
                    <th>Pembayaran</th>
                    <th>Jenis Poli</th>
                    <th>Diagnosa</th>
                    <th>Rujukan</th>
                    <th>Jenis Obat</th>
                </tr>
            <thead>
            <tbody>
                <tr>
                    <td>{$v->nama_pasien_berobat}</td>
                    <td>{$v->s}</td>
                    <td>{$v->o}</td>
                    <td>{$v->a}</td>
                    <td>{$v->p}</td>
                    <td>{$v->tgl_berobat}</td>
                    <td>{$v->pembayaran}</td>
                    <td>{$v->jenis_poli}</td>
                    <td>{$v->diagnosa}</td>
                    <td>{$v->rujukan}</td>
                    <td>{$v->jenis_obat}</td>
                </tr>
            </tbody>
        </table>
    END;
}
?>
<script>
    window.print()
    window.close()
    window.onafterprint = window.close;

    </script>