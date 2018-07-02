<div class="container stc">
    <div class="container m-bar">
        <i class="fas fa-bars" onclick="myFunction()"></i>
        <!--<i class="far fa-envelope" onclick="functionNotifInbox()"></i><span id="signNotifInbox">1</span>
        <i class="far fa-bell" onclick="functionNotification()"></i><span id="signNotification" class="l83">1</span>-->
    </div>
    <i class="fas fa-sign-in-alt login-ic"></i>
    <span class="downleft" tooltip="Foto Profile Member" flow="left" style="height: 20px;top: 6px;width:  20px;position:  absolute;right: 0px;z-index:  1;font-size: 10px;"><i class="material-icons" style="color:  white;font-size:  10px;">info</i></span>
    <div class="fl-r img-pic" style="right: 5px;">
        <a href="<?php echo base_url('member/profile'); ?>">
            <?php $pic = explode('.', $this->session->member['url_pic']); ?>
            <img src="<?php echo (isset($pic[3])) ? $this->session->member['url_pic'] : SUBCDN."assets/img/eyeme/user-discover.png"; ?>" alt="">
        </a>
    </div>
</div>