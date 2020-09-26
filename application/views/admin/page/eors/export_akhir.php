<center>
    <h1>Data Akhir Kegiatan <?= $kegiatan ?></h1>
    <h3>Disortir Berdasarkan : <?= $tipe_data ?></h3>
</center>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <thead>
        <tr style="font-size: 13px;">
            <th style="vertical-align: middle;">
                <center>No</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Nim</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Nama Lengkap</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Angkatan</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Jenis Kelamin</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Agama</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Alamat Asal</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Alamat Sekarang</center>
            </th>

            <th style="vertical-align: middle;">
                <center>Email</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Whatsapp</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Prodi</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Keterangan</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Diterima di</center>
            </th>
            <th style="vertical-align: middle;">
                <center>Tanggal Mendaftar</center>
            </th>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($pendaftar as $data) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama_lengkap'] ?></td>
            <td><?= $data['angkatan'] ?></td>
            <td><?= $data['jenis_kelamin'] ?></td>
            <td><?= $data['agama'] ?></td>
            <td><?= $data['alamat_asal'] ?></td>
            <td><?= $data['alamat_sekarang'] ?></td>
            <td><?= $data['email'] ?></td>
            <td>
                "<?= $data['wa']  ?>"
            </td>
            <td><?= $data['prodi'] ?></td>
            <td><?php if ($data['ket_lulus'] == 1) {
                        echo "Diterima";
                    } else {
                        echo "Tidak Diterima";
                    } ?></td>
            <td><?= $data['diterima_di'] ?></td>
            <td><?= $data['create_at'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>