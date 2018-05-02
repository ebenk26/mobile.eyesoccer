<?php
    if ($detail)
    {
        $detail  = json_decode($detail)->data;
?>
        <div class="container enews-detail" style="margin-top: 50px;">
            <h1><?= $detail->title; ?></h1>
            <img src="<?= $detail->url_pic; ?>" alt="<?= $detail->title; ?>" width="100%">
            <div class="container profile-writer b-b-1">
                <div class="container">
                    <div class="img-radius img-pp p-r" style="background-color: #f2f2f2;">
                        <img src="<?php echo imgEyesoccer()?>" alt="<?= $detail->fullname; ?>">
                    </div>
                    <h3><?= $detail->fullname; ?></h3>
                    <span> 
                        <?php echo relative_time($this->library->datenormal($detail->createon)); ?> lalu
                    </span>                
                </div>
                
            </div>
            <div class="container-94">
                <p><?= $detail->description; ?></p>
            </div>
        </div>
        <div class="container enews-detail">
            <div class="container m-b-15" style="background-color: #fafafa;">
                <h3 class="h3-red">EVENT Lainnya</h3>
                <div class="carousel slide t-30 over-x">
                    <div role="listbox" class="carousel-inner w-max">
                        <div class="box item active no-decoration">
                            <?php 
                                foreach ($detail->related_event as $value)
                                {
                            ?>
                                    <a href="<?= base_url(); ?>eyevent/detail/<?= $value->slug; ?>">
                                        <div class="video-thumb">
                                            <div class="v-thumb-img">
                                                <img src="<?= $value->url_pic; ?>" alt="<?= $value->title; ?>">
                                            </div>
                                            <h2><?= $value->title; ?></h2>
                                            <span>
                                                <?php echo relative_time($this->library->datenormal($value->createon)); ?> lalu
                                            </span>
                                        </div>
                                    </a>
                            <?php        
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
?>

