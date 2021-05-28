<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inner Join</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h4>Table Barang</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Barang</th>
                        <th scope="col">Kode Barang </th>
                        <th scope="col">Nama Barang </th>
                        <th scope="col">Jumlah Barang </th>
                        <th scope="col">Harga Barang </th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM barang';
                $query = mysqli_query($tersambung,$sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_barang']?></td>
                        <td><?php echo $row['kode_barang']?></td>
                        <td><?php echo $row['nama_barang']?></td>
                        <td><?php echo $row['jumlah_barang']?></td>
                        <td><?php echo $row['harga_barang']?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4>Table Customer</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Customer</th>
                        <th scope="col">Kode Customer </th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Alamat Customer </th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = 'SELECT * FROM customer';
                $query = mysqli_query($tersambung,$sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_customer']?></td>
                        <td><?php echo $row['kode_customer']?></td>
                        <td><?php echo $row['nama_customer']?></td>
                        <td><?php echo $row['alamat_customer']?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4>Table Inner Join - Transaksi</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">Kode Barang </th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kode Customer </th>
                        <th scope="col">Harga Barang </th>
                        <th scope="col">Tanggal Customer </th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT br.id_barang, br.nama_barang, br.kode_barang, br.nama_barang, br.harga_barang, tr.id_transaksi, tr.kode_customer, tr.tanggal_beli
                FROM barang br
                INNER JOIN transaksi tr
                ON br.id_barang = tr.id_transaksi';
                $query = mysqli_query($tersambung, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_transaksi']?></td>
                        <td><?php echo $row['kode_barang']?></td>
                        <td><?php echo $row['nama_barang']?></td>
                        <td><?php echo $row['kode_customer']?></td>
                        <td><?php echo $row['harga_barang']?></td>
                        <td><?php echo date('d/m/y : H:i:s', strtotime($row['tanggal_beli']))?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h4>Table Left Join - Transaksi</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">Kode Barang </th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kode Customer </th>
                        <th scope="col">Harga Barang </th>
                        <th scope="col">Tanggal Customer </th>

                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT br.id_barang, br.nama_barang, br.kode_barang, br.nama_barang, br.harga_barang, tr.id_transaksi, tr.kode_customer, tr.tanggal_beli
                FROM barang br
                LEFT JOIN transaksi tr
                ON br.id_barang = tr.id_transaksi';
                $query = mysqli_query($tersambung, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>

                <tbody>

                    <tr>
                        <td><?php echo $row['id_transaksi']?></td>
                        <td><?php echo $row['kode_barang']?></td>
                        <td><?php echo $row['nama_barang']?></td>
                        <td><?php echo $row['kode_customer']?></td>
                        <td><?php echo $row['harga_barang']?></td>
                        <td><?php echo date('d/m/y : H:i:s', strtotime($row['tanggal_beli']))?></td>
                    </tr>

                </tbody>
                <?php
                }
                ?>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>