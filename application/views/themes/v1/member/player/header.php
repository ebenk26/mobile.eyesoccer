<div class="player-tabs bg250 mg-tb15">
    <div class="container player-tab pad-tb15 tx-center" id="player-tab">
        <?php $uid = (isset($_GET['uid'])) ? $_GET['uid'] : $this->input->post('uid'); ?>
        <a href="<?php echo base_url("member/player/?tab=profil&uid=".$uid); ?>"><span id="form-player" class="disp-inblock <?php echo ($active=='profil' ? 'active' : '')?>">Profil</span></a>
        <a href="<?php echo base_url("member/player/?tab=karir&uid=".$uid); ?>"><span id="form-karir" class="disp-inblock <?php echo ($active=='karir' ? 'active' : '')?>">Karir</span></a>
        <a href="<?php echo base_url("member/player/?tab=penghargaan&uid=".$uid); ?>"><span id="form-penghargaan" class="disp-inblock <?php echo ($active=='penghargaan' ? 'active' : '')?>">Penghargaan</span></a>
        <a href="<?php echo base_url("member/player/?tab=galeri&uid=".$uid); ?>"><span id="form-galeri" class="disp-inblock <?php echo ($active=='galeri' ? 'active' : '')?>">Galeri</span></a>
    </div>
</div>