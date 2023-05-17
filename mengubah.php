<!DOCTYPE html>
<html>
<head><link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"
          ><span>PBW</span> Selamat Datang, Juanzha Nanda Pratama</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end text-bg-dark"
          tabindex="-1"
          id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
              Praktikum PBW A
            </h5>
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Juanzha_Nanda_Pratama_Modul4.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"
                  >Daftar Mahasiswa</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"
                  >Informasi Tugas</a
                >
              </li>
            </ul>
            <div>
              <button class="btn btn-danger" type="submit">
                <a href="Login.php"><i data-feather="log-out"></i> Logout</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>


    <div class="container mt-3">
    <div class="row">
      <h1 style="color: aliceblue"><span>DAFTAR </span> MAHASISWA</h1>
      <h1 style="color: aliceblue">
        PRAKTIKUM PEMROGRAMAN BERBASIS <span>WEB</span>
      </h1>
      <div class="col">
        <div class="card " >
            
           
            
    </div >
		
	<br>
	<button type="button" class="btn btn-primary btn-sm " style="width: 80px;height: 30px;border-radius: 10px;">
	<a style="text-decoration: none; color:white;" href="juanzha_nanda_pratama_UTS.php">KEMBALI</a></button>
	<br/>
	<br/>
	<h3 style="color:white;">EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'conect.php';
	$id = $_GET['id'];
	$data = mysqli_query($conect,"SELECT * FROM tbl_mhs2 WHERE id_mahasiswa='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="POST" action="ubah.php">
			<table  style="color:white; ">
				<tr>			
					<td>NIM</td>
					<td>
						<input type="hidden" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa']; ?>">
						<input type="number" name="nim" value="<?php echo $d['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA MAHASISWA</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama_mhs']; ?>"></td>
				</tr>
                <tr>
					<td>NAMA DOSEN</td>
					<td><input type="text" name="nama1" value="<?php echo $d['nama_dosen']; ?>"></td>
				</tr>
                <tr>
					<td>STATUS</td>
					<td><input type="text" name="st" value="<?php echo $d['st']; ?>"></td>
				</tr>
				<tr>
					<td>KETERANGAN</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['ket']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
	
            </div>
          </div>
        </div>
    </div>
</div>
    <script>
      feather.replace();
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
 

 
</body>
</html>