<?php include $_SERVER["DOCUMENT_ROOT"] . "/template/header.php"; ?>
    <div class="musicText">


        <?php foreach ($mus as $item): ?>

            <a href="/Information/musics/musicText?id=<?= $item->ID ?>"
               class="music"> <?= $item->nameOfText ?> </a>  <br>



        <?php endforeach; ?><br>



        <?php foreach ($mus as $item): ?>

        <?php endforeach; ?><br>

        <form action="/Information/albums/change/" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $album->ID ?>">

            <button name="change" style="display: <?= $_SESSION['auth'] ? 'block' : 'none' ?>" class="changeAlbum"> Обновить альбом </button>
        </form>

        <form action="/Information/musics/addText/" method="post" enctype="multipart/form-data">
            <button style="display: <?= $_SESSION['auth'] ? 'button' : 'none' ?>" name="addMusic">Добавить песню
            </button>
        </form>


    </div>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"; ?>