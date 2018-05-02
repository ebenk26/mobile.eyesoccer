<?php

$default = 'http://static.eyesoccer.id/v1/cache/images/logo_player_2.png';
$profile = json_decode($profile);

foreach ($profile->data as $k => $v) {
    ?>
        <a href='<?php echo $v->share_url; ?>'>
            <div class='ep-box-content'>
                <div class='img'>
                    <img src='<?php echo $v->url_pic; ?>' alt='<?php echo $v->name; ?>'>
                </div>
                <div class='ep-detail'>
                    <h1><?php echo $v->name; ?></h1>
                    <p>
                        Posisi: <?php echo $v->position_a; ?><br>
                        Klub: <?php echo $v->club; ?><br>
                    </p>
                </div>
            </div>
        </a>
    <?php
}

?>

                   
                   