<div class="container">
    <?php /** @var \App\Models\Article[] $data */
    foreach ($data as $article) { ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">

                    <?= $article->getTitle() ?>
                    <a href="?c=blog&a=edit&id=<?= $article->getId() ?>">Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="?c=blog&a=delete&id=<?= $article->getId() ?>">Zmazat</a>


                </h1>
                <p class="lead"><?= $article->getText() ?></p>
            </div>
        </div>
    <?php } ?>
</div>