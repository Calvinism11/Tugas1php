<?php
$nama = "Calvin Prakoso Setyo Aji";
$email = "202151046@std.umk.ac.id";
$nomor_telepon = "089514774421";
$alamat = "Kudus, Jawa Tengah";
$hobi = "Menonton Video/Film";
$foto_profil = "https://e1.pxfuel.com/desktop-wallpaper/771/781/desktop-wallpaper-armagedong-shop-invoker-dota-2-thumbnail.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <style>
        body {
            margin: 0;
            margin-top: 8%;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://images6.alphacoders.com/505/505974.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
        }
        .profile-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile-info p {
            margin-bottom: 10px;
        }
        .profile-picture {
            margin-bottom: 20px;
        }
        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="row">
<div class="container profile-container">
    <h1 class="text-center mb-4">Profil Saya</h1>
    <div class="profile-picture">
    <div class="col-12 col-md-6">
        <img src="<?php echo $foto_profil; ?>" alt="Foto Profil">
    </div>
    </div>
    <div class="profile-info" >
        <p><strong>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $nama; ?></p>
        <p><strong>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $email; ?></p>
        <p><strong>HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $nomor_telepon; ?></p>
        <p><strong>Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $alamat; ?></p>
        <p><strong>Hobi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> <?php echo $hobi; ?></p>
    </div>
    <div class="motivation-container">
    <div class="col-12 col-md-6">
        <h2>Motivasi</h2>
        <p>
            Be Yourself and Never Surrender
        </p>
   </div>
</div>
</div>
</div>>

</body>
</html>
