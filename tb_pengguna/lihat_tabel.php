<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7UICaOmDSRp_X23o1r_L4kCz4jluTzWNZe_cn4K4XYyvddzjKGIUKzjpKnwr9Fkl-XN8&usqp=CAU height="40px"alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../dasbord.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_tabel.php">Data Pengguna</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="../lihat_buku.php">Data Buku</a>
        </li>
      </ul>
      <form class="d-flex" action="login.php">
        <button class="btn btn-outline-success" type="submit">logout</button>
      </form>
    </div>
  </div>
</nav>
</style>
</head>
<body>
    <div>
        <h2  class="contoh">Tabel Pengguna</h2>
        <table class="table table-bordered contoh">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>TGL</th>
                    <th>Alamat</th>
                    <th>username</th>
                    <th>password</th>
                    <th>aksi</th>
                </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT*FROM tb_pengguna";
                $query = mysqli_query ($koneksi, $sql);
                $no=1;
                while ($data=mysqli_fetch_array($query)){?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['tgl'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['password'];?></td>
                    <td>
                    <a href="hapus.php?id=<?php echo $data ['no'];?>"
                    onclick="return confirm( 'Yakin Mau Hapus .?')">
                        <span class="text"></span>Hapus</Details></span>
                    </a> 
                    </td>
                </tr>
                <?php  } ?>
                    </tbody>
                </table>
                <form method="post" action="index.php" class="contoh">
                    <button type="submit" class="btn btn-outline-success">Daftar</button>
                </form>
                </div>
                </body>
                </html>
            