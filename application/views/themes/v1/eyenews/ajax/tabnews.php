<div id='boxtab'>
    <span id='tab-rekomendasi' onclick="tabmenu(this.id, 'span', 'div', 'orange-active')" class="orange-active" active="true">rekomendasi</span>
    <span id='tab-usiamuda' onclick="tabmenu(this.id, 'span', 'div', 'orange-active')">usia muda</span>
    <span id='tab-populer' onclick="tabmenu(this.id, 'span', 'div', 'orange-active')">terpopuler</span>
</div>
<hr>
<div role="listbox" class="carousel-inner">
    <div id='tab-populer' class="box item">
        <div class="container rek-ber">
            <?php
                if ($popular) {
                    $popular = json_decode($popular);
                    foreach ($popular->data as $dt) {
                        ?>
                        <a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
                            <div class="rek-ber-c">
                                <div class="img-res-height">
                                    <img src="<?php echo $dt->url_pic . '/small'; ?>" alt="<?php echo $dt->title; ?>">
                                </div>
                                <span><?php echo date('d M Y H:i:s', strtotime($dt->publish_on)); ?></span>
                                <h1><?php echo $dt->title; ?></h1>
                                <?php echo word_limiter($dt->description, 10); ?>
                            </div>
                        </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div id='tab-rekomendasi' class="box item active">
        <div class="container rek-ber">
            <?php
                if ($recommended) {
                    $recommended = json_decode($recommended);
                    foreach ($recommended->data as $dt) {
                        ?>
                        <a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
                            <div class="rek-ber-c" style="height: 90px;">
                                <div class="img-res-height">
                                    <img src="<?php echo $dt->url_pic . '/small'; ?>" alt="<?php echo $dt->title; ?>">
                                </div>
                                <span><?php echo date('d M Y H:i:s', strtotime($dt->publish_on)); ?></span>
                                <h1><?php echo $dt->title; ?></h1>
                                <?php echo word_limiter($dt->description, 10); ?>
                            </div>
                        </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div id='tab-usiamuda' class="box item">
        <div class="container rek-ber">
            <?php
                if ($youngage) {
                    $youngage = json_decode($youngage);
                    foreach ($youngage->data as $dt) {
                        ?>
                        <a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
                            <div class="rek-ber-c">
                                <div class="img-res-height">
                                    <img src="<?php echo $dt->url_pic . '/small'; ?>" alt="<?php echo $dt->title; ?>">
                                </div>
                                <span><?php echo date('d M Y H:i:s', strtotime($dt->publish_on)); ?></span>
                                <h1><?php echo $dt->title; ?></h1>
                                <?php echo word_limiter($dt->description, 10); ?>
                            </div>
                        </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</div>