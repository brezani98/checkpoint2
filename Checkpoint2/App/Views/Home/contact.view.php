<?php /** @var Array $data */ ?>
<div class="container">
    <h1 class="mt-5">Kontakt :</h1>
    <p class="lead">   E-mailom  info@xiaomi-store.cz </p>

    <p>

        Telefonicky : +421 948 653 352
    </p>
    <p>

        E-mailom : info@xiaomi-store.cz
    </p>
    <p>
        Infolinka v prevádzke  :
    </p>
    <p>
        Po-Št 9:00-12:00, 12:45-18:00
    </p>
    <p>
        Pi 9:00-12:00, 12:45-16:45
    </p>
</div>

<div class="container">
    <img src="https://instance12.admin.grandus.sk/files/photo/2019-11-13/1f1c61/560536/680x440.webp" alt="alternatetext">
<?php
$lat = $data['lat'];//"33.80766";
$log =  $data['lng']; //"-33.76714";

?>
<iframe id="map-canvas" class="map_part" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=<?php echo $lat.",".$log; ?>&amp;t=&amp;z=3&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>