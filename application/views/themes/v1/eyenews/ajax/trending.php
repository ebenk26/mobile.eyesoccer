    <?php
        if($news)
        {
            $news = json_decode($news);
            foreach($news->data as $dt)
            {
                ?>
                    <a style="font-size: 10px" href="<?php echo base_url()."eyenews/detail/".$dt->slug; ?>" title="<?php echo $dt->title; ?>"><?php echo word_limiter($dt->title, 3); ?></a>
                <?php
            }
        }
    ?>