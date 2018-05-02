<div class="etube-home enews" style="padding-top: unset;">
    <?php
        if ($event_list)
        {
            $event_list  = json_decode($event_list);

            foreach ($event_list->data as $value)
            {
    ?>
                <a href="<?= base_url(); ?>eyevent/detail/<?= $value->slug; ?>">
                    <div class="etube-mobile-thumb eyevent-thumb" style="background-color: #f2f2f2;">
                        <img src="<?= $value->url_pic; ?>/medium" alt="">
                        <div class="enews-title">
                            <h2><?= $value->title; ?></h2>            
                        </div>
                    </div>
                </a>
    <?php
            }
        }
    ?>
</div>