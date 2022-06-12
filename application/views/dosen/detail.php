<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>

<body>
    <div class="col-md-12">
        <h3>
            Detial Dosen
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
                <tr>
                    <td>
                        <?php echo $ddosen->id ?>
                    </td>
                    <td><?php echo $ddosen->nidn ?></td>
                    <td><?php echo $ddosen->nama ?></td>
                    <td><?php echo $ddosen->gender ?></td>
                    <td><?php echo $ddosen->tmp_lahir ?></td>
                    <td><?php echo $ddosen->tgl_lahir ?></td>
                    <td><?php echo $ddosen->pendidikan ?></td>
                </tr>
            </tbody>
        </table>
        <div class="col-md5 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="align-items-center text-center">
                        <img src="<?= base_url() ?>uploads/photos/<?= $ddosen->id ?>.jpg" width="300" />
                        <div class="mt4">
                            <h4><?= $ddosen->nama ?></h4>
                            <p>Foto Dosen</p>
                            <?php echo $error; ?>
                            <?php echo form_open_multipart('dosen/upload'); ?>
                            <input type="file" name="foto" size="300" />
                            <input type="hidden" name="iddosen" value="<?= $ddosen->id ?>" />
                            <br /> <br />
                            <input type="submit" value="Upload Foto" class="btn btn-primary" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>