<?php

$default = 'http://static.eyesoccer.id/v1/cache/images/logo_player_2.png';
$club = json_decode($club);

foreach ($club->data as $k => $v) {
    ?>
        <a href='<?php echo $v->share_url; ?>'>
            <div class='ep-box-content'>
                <div class='img'>
                    <img src='<?php echo $v->url_logo; ?>' alt='<?php echo $v->name; ?>'>
                </div>
                <div class='ep-detail'>
                    <h1><?php echo $v->name; ?></h1>
                    <p>
                        Kompetisi <?php echo $v->competition; ?><br>
                        Sebutan <?php echo $v->nickname; ?><br>
                        Squad <?php echo $v->number_of_player; ?><br>
                    </p>
                </div>
            </div>
        </a>
        testsetse
    <?php
}

?>

                   
                   