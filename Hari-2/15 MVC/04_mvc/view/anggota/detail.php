<!-- view/anggota/detail.php -->
<?php $judul = $anggota['name'] ?>

<?php ob_start() ?>
    <h1><?= $anggota['name'] ?></h1>
    <p>Name: <?= $anggota['name'] ?></p>
    <p>Birth Date: <?= $anggota['birth'] ?></p>
    <p>Address: <?= $anggota['address'] ?></p>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>