<div class="container">
    <div class="pp-profil">
        <img src="<?php echo ($player AND $player->url_pic) ? $player->url_pic : SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player" class="viewimg">
    </div>
    <div class="full-width tx-center mg-tb15">
        <?php echo $player->name; ?>
    </div>
</div>

<?php
    $uid = (isset($_GET['uid'])) ? $_GET['uid'] : $this->input->post('uid');
    if ($uid != '') {
        $data['active'] = 'penghargaan';
        $this->load->view($folder . 'member/player/header', $data);
    }
?>

<a href="<?php echo base_url('member/player/?tab=penghargaan&uid=' . $this->input->post('uid') . '&act=add'); ?>" class="btn-white-orange fl-r">
    <i class="fas fa-plus mg-r5"></i>Tambah
</a>

<div class="container mg-t15">
<?php
    if ($achive) {
        foreach ($achive->data as $c) {
            ?>
            <div class="x-form-daftar-pemain row">
                <a href="javascript:void(0)" title="Hapus" id="delachive_<?php echo $c->id_achievement; ?>" class="form_post" action="member" fn="playerachiveact"
                   confirm="Apakah anda yakin ingin menghapusnya?">
                    <i class="fas fa-times" style="float:right; font-size:.9em;"></i>
                    <span class="cinput disp-none" name="act" val="2"></span>
                    <input type="hidden" name="xid" value="<?php echo $this->input->post('uid'); ?>" class="cinput">
                    <input type="hidden" name="uid" value="<?php echo $player->slug; ?>" class="cinput">
                    <input type="hidden" name="id" value="<?php echo $c->id_achievement; ?>" class="cinput">
                </a>
                <a href="<?php echo base_url('member/player/?tab=penghargaan&uid=' . $this->input->post('uid') . '&act=' . $c->id_achievement); ?>" title="Edit">
                    <i class="far fa-edit mg-r10" style="float:right; font-size:.9em;"></i>
                </a>
                <div class="col-xs-12 pd-t-19 edits dftr-pemain">
                    <span><?php echo $c->tournament; ?></span>
                    <span>Tahun : <?php echo $c->year; ?></span>
                    <span>Peringkat : <?php echo $c->rank; ?></span>
                    <span>Penghargaan : <?php echo $c->appreciation; ?></span>
                </div>
            </div>
            <?php
        }

        $this->library->backnext('pageplayerachive', 'pagetotalplayerachive', $achivecount, 'member', 'playerachive', 20, ['uid' => $this->input->post('uid')]);
    }
?>
</div>
