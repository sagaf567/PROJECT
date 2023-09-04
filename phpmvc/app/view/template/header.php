<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halamam <?= $data['judul'];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://localhost/phpmvc/public/css/boostrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL; ?>">SMKN 2 TRENGGALEK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMaarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="<?= BASE_URL; ?>/blog">Jurusan</a>
            <a class="nav-item nav-link " href="<?= BASE_URL; ?>/guru">Data Guru</a>
            <a class="nav-item nav-link " href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
            <a class="nav-item nav-link " href="<?= BASE_URL; ?>/user/profile">About</a>  
        </div>
    </div>
    </div>
</nav>
