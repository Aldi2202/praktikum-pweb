<!DOCTYPE html>
<html>
<head>
    <title>Data Penumpang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama=input($_POST["nama"]);
        $identitas_penumpang=input($_POST["identitas_penumpang"]);
        $email=input($_POST["email"]);
        $no_hp=input($_POST["no_hp"]);
        $kode_booking=input($_POST["kode_booking"]);
        $nama_kereta=input($_POST["nama_kereta"]);
        $kelas_kereta=input($_POST["kelas_kereta"]);
        $stasiun_keberangkatan=input($_POST["stasiun_keberangkatan"]);
        $stasiun_tujuan=input($_POST["stasiun_tujuan"]);
        $tanggal_keberangkatan=input($_POST["tanggal_keberangkatan"]);


        //Query input menginput data kedalam tabel anggota
        $sql="insert into penumpang (nama,identitas_penumpang,email,no_hp,kode_booking,
        nama_kereta,kelas_kereta,stasiun_keberangkatan,stasiun_tujuan,tanggal_keberangkatan) values
		('$nama','$identitas_penumpang','$email','$no_hp','$kode_booking',
        '$nama_kereta','$kelas_kereta','$stasiun_keberangkatan','$stasiun_tujuan',
        '$tanggal_keberangkatan')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />

        </div>
        <div class="form-group">
            <label>Identitas Penumpang:</label>
            <input type="text" name="identitas_penumpang" class="form-control" placeholder="Masukan Identitas Penumpang" required />

        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" placeholder="Masukan Email" required />

        </div>
        <div class="form-group">
            <label>No hp:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required/>
        </div>
        <div class="form-group">
            <label>Kode Booking:</label>
            <input type="text" name="kode_booking" class="form-control" placeholder="Masukan Kode Booking" required />

        </div>
       <div class="form-group">
            <label>Nama Kereta :</label>
            <input type="text" name="nama_kereta" class="form-control" placeholder="Masukan Nama Kereta" required/>
        </div>
        <div class="form-group">
            <label>Kelas Kereta :</label>
            <input type="text" name="kelas_kereta" class="form-control" placeholder="Masukan Kelas Kereta" required/>
        </div>
                </p>
        <div class="form-group">
            <label>Stasiun Keberangkatan:</label>
            <input type="text" name="stasiun_keberangkatan" class="form-control" placeholder="Masukan Stasiun Keberangkatan" required/>
        </div>
        <div class="form-group">
            <label>Stasiun Tujuan:</label>
            <textarea name="stasiun_tujuan" class="form-control" rows="5"placeholder="Masukan Stasiun Tujuan" required></textarea>
        </div>
        <div class="form-group">
            <label>Tanggal Keberangkatan:</label>
            <textarea name="tanggal_keberangkatan" class="form-control" rows="5"placeholder="Masukan Tanggal Keberangkatan" required></textarea>
        </div>       

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>