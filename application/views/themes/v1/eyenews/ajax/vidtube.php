<?php
    $folder = $this->config->item('themes');
    
    if($video)
    {
        $i = 0;
        $video = json_decode($video);
        foreach($video->data as $dt)
        {
            if($i == 0)
            {
                ?>
                    <div class="v-eyetube">
                        <img src="<?php echo $dt->url_thumb; ?>" alt="<?php echo $dt->title; ?>">
                    </div>
                    <span><?php echo relative_time($this->library->datenormal($dt->createon)); ?> lalu</span>
                    <h1><?php echo $dt->title; ?></h1>
                    
                    <div class="container" style="margin-top: -40px;background-color: #fafafa;">
                        coba bcccascaca
                <?php
            } else {
                ?>
                    <div class="etube-content pd-t-10">
                        <div class="v-etube">
                            <img src="<?php echo $dt->url_thumb; ?>" alt="<?php echo $dt->title; ?>">
                            <div class="btn-play">
                                <img src="<?php echo SUBCDN."assets/$folder"; ?>img/btn-play.png" alt="">
                            </div>                    
                        </div>
                        <h1><?php echo $dt->title; ?></h1>
                        <span><?php echo relative_time($this->library->datenormal($dt->createon)); ?></span>
                        <span><?php echo $dt->tube_view; ?> view - <?php echo $dt->tube_like; ?> suka</span>
                    </div>
                <?php
            }
            
            if($i == count($video->data) - 1)
            {
                ?> </div> <?php
            }
            
            $i++;
        }
    }
?>