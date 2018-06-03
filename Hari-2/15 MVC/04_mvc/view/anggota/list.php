<!-- view/anggota/list.php -->
<?php $judul = 'Member List' ?>

<?php ob_start() ?>
    <h1>Member List</h1>
    <ul>
        <?php foreach ($anggota as $row): ?>
        <li>
            <a href="detail?id=<?= $row['id'] ?>">
                <?= $row['name'] ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
<?php $isi = ob_get_clean() ?>

<?php include 'view/template.php' ?>