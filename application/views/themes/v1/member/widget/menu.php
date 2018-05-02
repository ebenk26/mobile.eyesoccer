<div id="menuDashboard" class="menu-dashboard bg243" style="display:none;">
    <div class="container bg-menu-pic">
        <div class="menu-pic">
            <img src="<?php echo ($this->session->member != '') ? $this->session->member['url_pic'] : SUBCDN."assets/img/eyeme/user-discover.png"; ?>" alt="">
        </div>

        <div class="tx-center mg-t20">
            <?php echo $this->session->member['name']; ?>
        </div>
    </div>
    <div class="container menu-dash">
        <a href="<?php echo SUBCDN."eyeprofile/klub"; ?>">
            <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyeprofile.png"; ?>" alt="">Eye Profile
        </a>
        <a href="<?php echo base_url("eyetube"); ?>">
            <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyetube.png"; ?>" alt="">Eye Tube
        </a>
        <a href="<?php echo base_url("eyenews"); ?>">
            <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyenews.png"; ?>" alt="">Eye News
        </a>
        <a href="<?php echo base_url("eyeme"); ?>">
            <img src="<?php echo SUBCDN."assets/themes/v1/img/ic-eyeme.png"; ?>" alt="">Eye Me
        </a>
        <a href="<?php echo base_url("eyemarket"); ?>">
            <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyemarket.png"; ?>" alt="">Eye Market
        </a>
        <a href="<?php echo base_url("eyevent"); ?>">
            <img src="<?php echo SUBCDN."assets/themes/v1/img/ic_eyevent.png"; ?>" alt="">EyeVent
        </a>
    </div>
</div>