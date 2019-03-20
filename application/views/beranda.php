<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1 style="color:skyblue; text-align: left; font-size: 10.3mm; margin-top: 197px; margin-left: 12px;
    font-family: sans-serif; text-align: center;">Selamat Datang, <?= $nama_lengkap ?>
    <br> Berperilakulah seperti <?= $jenis_kelamin ?></h1>
    <p style="font-size: 18px;margin-left: 56px;margin-top: 39px;">
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui sed distinctio saepe amet laborum nemo reprehenderit! Ducimus nobis quae minus quisquam quam eos, amet numquam sunt soluta cum recusandae. Odio.
    </p>
    <a href="<?= base_url() ?>index.php/welcome/utama"><img style="width: 100px; margin-left: 650px; margin-top: 0px;" src="<?= base_url() ?>assets/go.png"></a>
</body>
</html>