<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<title>Data Penumpang</title>
<body>
    <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Penumpang Kereta Api Indonesia</span>
        </div>
    </nav>
<div class="container">
    <br>
    <h4 class="center-text">DAFTAR PENUMPANG</h4>
<?php
    
    include "koneksi.php"; //yang berisi skrip koneksi ke basis data MySQL

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_penumpang'])) {
        $id_penumpang=htmlspecialchars($_GET["id_penumpang"]);

        $sql="delete from penumpang where id_penumpang='$id_penumpang' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">           
            <th>No</th>
            <th>Nama</th>
            <th>Identitas Penumpang</th>
            <th>Email</th>
            <th>No hp</th>
            <th>Kode Booking</th>
            <th>Nama Kereta</th>
            <th>Kelas_Kereta</th>
            <th>Stasiun Keberangkatan</th>
            <th>Stasiun Tujuan</th>
            <th>Tanggal Keberangkatan</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from penumpang order by id_penumpang desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["identitas_penumpang"]; ?></td>
                <td><?php echo $data["email"]; ?></td>
                <td><?php echo $data["no_hp"];   ?></td>
                <td><?php echo $data["kode_booking"]; ?></td>
                <td><?php echo $data["nama_kereta"];   ?></td>
                <td><?php echo $data["kelas_kereta"]; ?></td>
                <td><?php echo $data["stasiun_keberangkatan"];   ?></td>
                <td><?php echo $data["stasiun_tujuan"];   ?></td>
                <td><?php echo $data["tanggal_keberangkatan"]; ?></td>
                <td>
                    <a href="update.php?id_penumpang=<?php echo htmlspecialchars($data['id_penumpang']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_penumpang=<?php echo $data['id_penumpang']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
</div>
</body>
</html>
