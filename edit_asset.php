<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Adriswara</title>
</head>

<body>
    <h1>Perpustakaan Adriswara</h1>
    <h3>Form Edit Pengguna</h3>
    <form method="POST" action="update_anggota_220088.php">
        <?php 
              include "connection_220088.php";
              $querry = "SELECT * FROM anggota_220088 WHERE id_anggota_220088='$_GET[id]'";
              $pet=mysqli_query($db_connection,$querry);
              $data=mysqli_fetch_assoc($pet);
          ?>


        <table>
            <tr>
                <td>Nik</td>
                <td><input type="text" name="nik_220088" value="<?= $data['nik_220088']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_lengkap_220088" value="<?= $data['nama_lengkap_220088']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin_220088" value="Laki-laki"
                        <?= ($data['jenis_kelamin_220088']=='Laki-laki')?'checked':'';?> required>Laki-laki
                    <input type="radio" name="jenis_kelamin_220088" value="Perempuan"
                        <?= ($data['jenis_kelamin_220088']=='Perempuan')?'checked':'';?> required>Perempuan
                </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td><input type="date" name="tanggal_lahir_220088" value="<?= $data['tanggal_lahir_220088']; ?>"
                        required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat_220088" required> <?= $data['alamat_220088']; ?> </textarea>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon_220088" value="<?= $data['telepon_220088']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email_220088" value="<?= $data['email_220088']; ?>" required></td>
            </tr>
            <tr>
                <td> Pekerjaan</td>
                <td>
                    <select name="pekerjaan_220088" id="">
                        <option value="">Choose</option>
                        <option value="mahasiswa" <?= ($data['pekerjaan_220088']=='mahasiswa')?'selected':'';?>>
                            mahasiswa</option>
                        <option value="dosen" <?= ($data['pekerjaan_220088']=='dosen')?'selected':'';?>>dosen</option>
                        <option value="karyawan" <?= ($data['pekerjaan_220088']=='karyawan')?'selected':'';?>>karyawan
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    <input type="text" name="hobi_220088" value="<?= $data['hobi_220088']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Status Anggota</td>
                <td>
                    <input type="radio" name="status_anggota_220088" value="Aktif"
                        <?= ($data['status_anggota_220088']=='Aktif')?'checked':'';?> required>Aktif
                    <input type="radio" name="status_anggota_220088" value="Tidak Aktif"
                        <?= ($data['status_anggota_220088']=='Tidak Aktif')?'checked':'';?> required>Tidak Aktif
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_anggota_220088" value="<?=$data['id_anggota_220088']?>">
                </td>
            </tr>
            <table>
    </form>
    <p><a href="read_anggota_220088.php">CANCEL</a></p>
</body>

</html>