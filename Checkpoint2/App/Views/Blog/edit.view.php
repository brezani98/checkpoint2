<?php
/** @var \App\Models\Article $data */
?>

<div class="container">
    <h1>  Edit prvku <b><?= $data['model']->getTitle(); ?>  </b> </h1>
</div>

<?php

include "form.view.php";
