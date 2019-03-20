<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<style>
    body{
        background: rgb(34,193,195);
        background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%) no-repeat center center fixed;
    }
</style>
</head>
<body>
<nav class="navbar navbar-default navbar-expand-lg navbar-light bg-light">
      <a href="#" class="navbar-brand"><img width="50" height="40" src="<?= base_url() ?>assets/logo.png"></a>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>welcome/utama">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>welcome/event">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>welcome/gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>welcome/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>welcome/profil">MyProfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>Login/logout">Logout</a></li>
      </ul>
      </div>
  </nav>
</body>
</html>