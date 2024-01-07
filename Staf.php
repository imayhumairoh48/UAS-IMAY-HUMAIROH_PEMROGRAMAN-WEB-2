<?php
session_start();
include_once 'Connection.php';
$bansos = query("SELECT * FROM data_mhs_saintek");
if(isset($_SESSION['Email']) == '')
    header("location: login.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman staf</title>
    <style>
      @media print{
        .logout, .navbar, .tambah, .aksi{
          display: none;
        }
      }
    </style>
</head>
  <body>
    <div class="container">
    <nav class="navbar navbar-light bg-success object-fit-cover border rounded mt-3">
        <div class="container-fluid">
          <a class="navbar-brand">Selamat Datang diHalaman Staf</a>
          <form action="" method="post" class="d-flex ms-auto" class="serch">
            <input class="form-control me-2" type="text" name="key" aria-label="Search" autofocus autocomplete="off">
            <button class="btn btn-outline-light" type="submit" name="cari">Search</button>
          </form>
          <ul class="navbar-nav ms-2">
            <li class="nav-item">
              <a class="logout" aria-current="page" href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
            </li>
          </ul>
        </div>
    </nav>
      <figure class="text-center mt-4">
        <blockquote class="blockquote">
          <p>Data Mahasiswa SAINTEK</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          <cite title="Source Title">UIN STS Jambi</cite>
        </figcaption>
      </figure>
      <a href="cetak.php" class="">
    <button type="button" class="btn btn-primary mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
            <path d="M4 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V4h-4V2.5zm4 2H3v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4h-5.5a.5.5 0 0 1 0-1zm-2-2V1a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v1h-5z"/>
            <path d="M5 15a2 2 0 0 1-2-2h1.5a.5.5 0 0 0 0-1H3a3 3 0 0 0 3 3v-1.5a.5.5 0 0 0-1 0V14a2 2 0 0 1-2-2V5h10v7a2 2 0 0 1-2 2H5z"/>
        </svg> Cetak
    </button>
</a>

      
      <table class="table table-hover table-bordered align-middle border border-black">
                        <thead >
                    <tr class="table-success table-bordered">
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
                        
                    </tr>
                    <?php $i = 1; ?>
                    <?php  foreach($bansos as $row): ?>
                    <tbody>
                        <tr>
                        <td><?= $i;?></td>
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
                        </tr>
                    </tbody>
                    </thead>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    
                </table>
    </div>
     <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Imay Humairoh </p>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>