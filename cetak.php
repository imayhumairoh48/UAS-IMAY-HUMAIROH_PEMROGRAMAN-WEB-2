<?php
session_start();
include_once 'Connection.php';
$bansos = query("SELECT * FROM data_mhs_saintek");
if (isset($_SESSION['Email']) == '')
    header("location: login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cetak Data Mahasiswa</title>
    <style>
        /* Styling untuk cetak */
        @media print {
            /* Semua elemen kecuali tombol cetak akan disembunyikan saat dicetak */
            body * {
                visibility: hidden;
            }

            .print-container,
            .print-container * {
                visibility: visible;
            }

            /* Style untuk kontainer yang akan dicetak */
            .print-container {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Konten yang akan dicetak -->
    <div class="print-container">
        <h1>Data Mahasiswa SAINTEK</h1>

        <table border="1">
            <thead>
                <tr>
                <th>No</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Tanggal lahir</th>
                        <th>jenis kelamin</th>
                        <th>No telepon</th>
                        <th>Prodi</th>
                        <th>Status</th>
                        <th>Gambar</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($bansos as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>

                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["nim"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                        <td><?= $row["tanggal_lahir"]; ?></td>
                        <td><?= $row["jenis_kelamin"]; ?></td>
                        <td><?= $row["telepon"]; ?></td>
                        <td><?= $row["prodi"]; ?></td>
                        <td><?= $row["status"]; ?></td>
                        <td><img src="image/<?= $row["gambar"]; ?>" width="50"></td>
                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Tombol untuk mencetak -->
    <button onclick="window.print()">Cetak</button>

</body>

</html>
