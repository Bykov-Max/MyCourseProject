<?php include $_SERVER["DOCUMENT_ROOT"] . "/template/header.php"; ?>
    <div class="musicText">
        <?php foreach ($mus as $item): ?>

            <a href="/Information/musics/musicText?id=<?= $item->ID ?>"
               class="music"> <?= $item->nameOfText ?> </a>  <br>

        <?php endforeach; ?><br>

        <form action="/Information/musics/addText/" method="post" enctype="multipart/form-data">
            <button style="display: <?= $_SESSION['auth'] ? 'button' : 'none' ?>" name="addMusic">Добавить песню</button>
        </form>

    </div>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"; ?>