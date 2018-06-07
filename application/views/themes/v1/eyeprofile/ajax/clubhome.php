<?php

$default = 'https://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/medium';
$club = json_decode($club);

foreach ($club->data as $k => $v) {
    ?>
        <a href='<?php echo str_replace('pemain','klub',$v->share_url); ?>'>
            <div class='ep-box-content'>
                <div class='img'>
                    <img src='<?php echo $this->library->lastext($v->url_logo,'.') ? $v->url_logo : $default;// echo $v->url_logo; ?>' alt='<?php echo $v->name; ?>'>
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
       
    <?php
}

?>

                   
                   