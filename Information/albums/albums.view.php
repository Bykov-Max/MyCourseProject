<?php include $_SERVER["DOCUMENT_ROOT"] . "/template/header.php"; ?>


    <div class="albums">

        <form action="/Information/albums/add/" method="post" enctype="multipart/form-data">
            <button name="change" style = "display: <?= $_SESSION['auth'] ? 'block':'none' ?>">Добавить новый альбом</button>
        </form>

        <table cellspacing="0">
            <tr>
                <th>Обложка альбома</th>
                <th>Название альбома</th>
                <th>Дата создания</th>
            </tr>
            <?php foreach ($album as $item): ?>
                <tr>
                    <td>
                        <a href="/Information/musics/musicInAlbum?albumId=<?= $item->ID ?>" name="id"> <img
                                    src="/imagesForBase/<?= $item->photoOfAlbum ?>" class="albumImages">
                        </a>
                    </td>

                    <td>
                        <?= $item->name ?>
                    </td>

                    <td>
                        <?= $item->dateOfCreation ?>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>


        <button class="up"> НАВЕРХ</button>
        <script src="/js/js1.js"></script>
    </div>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"; ?>