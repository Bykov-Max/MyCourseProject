<?php include $_SERVER["DOCUMENT_ROOT"] . "/template/header.php"; ?>
<div class="musicText">
    <?php foreach ($mus as $item): ?>
        <a href="/Information/musics/musicText?id=<?= $item->ID ?>" name="musicID" class = "music" > <?= $item->nameOfText ?> </a>  <br>
    <?php endforeach; ?><br><br>

</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/template/footer.php"; ?>