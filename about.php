<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang | Dio Adista</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/LOGO UNU.png">
</head>
<body>
    <header>
        <img src="image/logoheader.png" alt="logo" height="60px">
        <nav>
            <ul class="nav__links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="skill.php">Skill</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="content-about">
            <h1>BIODATA MAHASISWA</h1>
            <br>
            
            <table cellpadding="4" cellspacing="2" align="center">
            <?php
            $konek = mysqli_connect("localhost","root","");
            $database = mysqli_select_db($konek, "webprofile");  
  
            $no = 1;
            $data = mysqli_query($konek,"select * from biodata");
            while($r = mysqli_fetch_array($data)){
            $nama = $r['nama'];
            $jenis_kelamin = $r['jenis_kelamin'];
            $agama = $r['agama'];
            $ttl = $r['ttl'];
            $alamat = $r['alamat'];
            $no_telp = $r['no_telp'];
            $email = $r['email'];
            $kewarganegaraan = $r['kewarganegaraan'];
            }
            ?>
                <tr>
                    <td class="td-color">Nama</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $nama;?></td>
                </tr>
                <tr>
                    <td class="td-color">Jenis Kelamin</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $jenis_kelamin;?></td>
                </tr>
                <tr>
                    <td class="td-color">Agama</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $agama;?></td>
                </tr>
                <tr>
                    <td class="td-color">Tempat, Tanggal Lahir</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $ttl;?></td>
                </tr>
                <tr>
                    <td class="td-color">Alamat</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $alamat;?></td>
                </tr>
                <tr>
                    <td class="td-color">No. Telepon</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $no_telp;?></td>
                </tr>
                <tr>
                    <td class="td-color">Email</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $email?></td>
                </tr>
                <tr>
                    <td class="td-color">Kewarganegaraan</td>
                    <td class="subtd-color">:</td>
                    <td class="subtd-color"><?php echo $kewarganegaraan;?></td>
                </tr>
            </table>
        </div>
    </main>

    <div class="footer">
        <p>Copyright (c) 2023 | Dio Adista Laksono</p>
    </div>
</body>
</html>