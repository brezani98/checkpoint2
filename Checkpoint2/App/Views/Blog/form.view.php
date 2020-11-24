<?php
/** @var \App\Models\Article $data */
?>

<div class="container">
    <form method="post">

        <?php if (!empty($data['model']->getId())) { ?>
            <input type="hidden" value="<?= $data['model']->getId() ?>" name="id">

        <?php } ?>

        <div class="form-group">
            <label >Názov :</label>
            <input type="text" class="form-control" name="title" value="<?= (!empty($data['model']) ? $data['model']->getTitle() : "") ?>" >

            <?php if (isset($data['err'][0])) {
                foreach ($data['err'][0] as $err) {
                    ?>
                    <div><?= $err ?></div>
                <?php }
            } ?>

        </div>


        <div class="form-group">
            <label >Popis</label>
            <textarea class="form-control"  name = "text" id="exampleFormControlTextarea1" rows="3">  <?= (!empty($data['model']) ? $data['model']->getText() : "") ?> </textarea>

            <?php if (isset($data['err'][1])) {
                foreach ($data['err'][1] as $err) {
                    ?>
                    <div><?= $err ?></div>
                <?php }
            } ?>

        </div>

        <button type="submit" class="btn btn-outline-primary" value="Odoslat" >Odoslať</button>
    </form>
</div>