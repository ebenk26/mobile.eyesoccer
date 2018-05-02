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
                    <a href="<?php echo $this->library->urltomob($dt->share_url); ?>" title="<?php echo $dt->title; ?>">
                        <div class="v-eyetube"  style="height: 185px; position: relative;">
                            <span class="hl">headline</span>
                            <img src="<?php echo $dt->url_thumb.'/medium'; ?>" alt="<?php echo $dt->title; ?>">
                        </div>
                        <span><?php echo relative_time($this->library->datenormal($dt->createon)); ?> lalu</span>
                        <h1 style="bottom: 50px;height: 2.2em;"><?php echo $dt->title; ?></h1>
                    </a>
                    
                    <div class="container" style="margin-top: -40px;background-color: #fafafa;">
                <?php
            } else {
                ?>
                    <div class="etube-content pd-t-10">
                        <a href="<?php echo $this->library->urltomob($dt->share_url); ?>" title="<?php echo $dt->title; ?>">
                            <div class="v-etube">
                                <img src="<?php echo $dt->url_thumb.'/small'; ?>" alt="<?php echo $dt->title; ?>">
                                <div class="btn-play">
                                    <img src="<?php echo SUBCDN."assets/$folder"; ?>img/btn-play.png" alt="">
                                </div>                    
                            </div>
                            <h1><?php echo $dt->title; ?></h1>
                            <span><?php echo relative_time($this->library->datenormal($dt->createon)); ?></span>
                            <span><?php echo $dt->tube_view; ?> view </span>
                        </a>
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