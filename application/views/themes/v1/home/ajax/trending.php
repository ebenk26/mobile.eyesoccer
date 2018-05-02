<span class="x-c">
    <span>Trending</span>
    <x class="m-l-100"></x>
    <?php
        if($news)
        {
            $news = json_decode($news);
            foreach($news->data as $dt)
            {
                ?>
                    <a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>"><?php echo word_limiter($dt->title, 3); ?></a>
                <?php
            }
        }
        
        if($video)
        {
            $video = json_decode($video);
            foreach($video->data as $dt)
            {
                ?>
                    <a href="<?php echo $this->library->urltomob($dt->share_url); ?>" title="<?php echo $dt->title; ?>"><?php echo word_limiter($dt->title, 3); ?></a>
                <?php
            }
        }
    ?>
</span>