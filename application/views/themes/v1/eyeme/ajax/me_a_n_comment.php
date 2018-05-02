

    
    <div class="item-komentar">
        <div class="img-radius">
            <img src="<?php echo $this->session->member['url_pic'].'/thumb'; ?>" alt="<?php echo $res['username']?>" width="100%">
        </div>
        <div class="text-komentar">
                <h3><?php echo $res['username']?></h3>
            <p><?php echo $res['comment']?></p>
        
            <span><?php echo $res['timeString']?></span>
        </div>
    </div>

