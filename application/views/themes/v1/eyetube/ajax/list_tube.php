<div class="etube-home" style="padding: unset;">
    <div class="container top-menu-ketegori over-x" style="margin-top: 55px;">
        <div class="w-max">
            <a href="<?php echo base_url();?>eyetube/kategori/Highlight">HIGHLIGHT</a>
            <a href="<?php echo base_url();?>eyetube/kategori/Profile-SSB">PROFILE SSB</a>
            <a href="<?php echo base_url();?>eyetube/kategori/Eye-Soccer-Flash">EYESOCCER FLASH</a>
            <a href="<?php echo base_url();?>eyetube/kategori/EyeSoccer-Fact">EYESOCCER FACT</a>
            <a href="<?php echo base_url();?>eyetube/kategori/Eyesoccerpedia">EYESOCCER PEDIA</a>
            <a href="<?php echo base_url();?>eyetube/kategori/Match-Preview">MATCH PREVIEW</a>
            <a href="<?php echo base_url();?>eyetube/kategori/Eye-Soccer-Hits">EYESOCCER HITS</a>
            <a href="<?php echo base_url();?>eyetube/kategori/Eyesoccer-Star">EYESOCCER STAR</a>
            <a href="<?php echo base_url();?>eyetube/kategori/Eye-Soccer-Funny">EYESOCCER FUNNY</a>
            <a href="<?php echo base_url();?>eyetube/kategori/VIDEO-KAMU">VIDEO KAMU</a>
        </div>
    </div>
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
                        <span class="kategori">
                            <?= $value->category_name; ?>
                        </span>
                        <h2><?= $value->title; ?></h2>
                        <span><?php echo relative_time($this->library->datenormal($value->createon)); ?> lalu - <?= $value->tube_view; ?> view</span>
                    </div>
                </a>
    <?php            
            }
        }
    ?>
</div>