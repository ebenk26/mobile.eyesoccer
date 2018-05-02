
<div role="listbox" class="carousel-inner w-max">                    
    <div class="box item active">
        <?php
            if ($event_list)
            {
                $event_list  = json_decode($event_list);

                foreach ($event_list->data as $value)
                {
        ?>
                    <a href="<?= base_url(); ?>eyevent/detail/<?= $value->slug; ?>">
                        <div class="ev-box-content" style="max-height: 185px;overflow: hidden;">
                            <img src="<?= $value->url_pic; ?>" alt="<?= $value->title; ?>">
                        </div>
                    </a>
        <?php
                }
            }
        ?>
        
    </div>
    <!-- <div class="box item">
        <div class="ev-box-content">
            
        </div>
        <div class="ev-box-content">
            
        </div>
        <div class="ev-box-content">
            
        </div>
    </div> -->
</div>