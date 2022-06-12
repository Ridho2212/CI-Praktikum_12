<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>

<body>
    <div class="col-md-12">
        <h3 class="text-center">
            Daftar Dosen
        </h3>
        <table border="2" class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($dosen as $ds) {
                ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $ds->nidn ?></td>
                    <td><?= $ds->nama ?></td>
                    <td><?= $ds->gender ?></td>
                    <td><?= $ds->tmp_lahir ?></td>
                    <td><?= $ds->tgl_lahir ?></td>
                    <td><?= $ds->pendidikan ?></td>
                </tr>
                <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>