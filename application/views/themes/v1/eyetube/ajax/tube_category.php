<div class="etube-home">
    <?php
        if ($tube)
        {
            $tube  = json_decode($tube);

            foreach ($tube->data as $value)
            {
    ?>

                <a href="<?php echo base_url();?>eyetube/detail/<?= $value->slug; ?>">
                    <div class="etube-mobile-thumb">
                        <div class="img">
                            <img src="<?= $value->url_thumb; ?>/medium" alt="<?= $value->title; ?>">
                        </div>
                        <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                        <h2><?= $value->title; ?></h2>
                        <span><?php echo relative_time($this->library->datenormal($value->createon)); ?> lalu - <?= $value->tube_view; ?> view</span>
                    </div>
                </a>
    <?php
            }
        }
    ?>
    
</div>