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
        $data['active'] = 'karir';
        $this->load->view($folder . 'member/player/header', $data);
    }
?>

<a href="<?php echo base_url('member/player/?tab=karir&uid=' . $this->input->post('uid') . '&act=add'); ?>" class="btn-white-orange fl-r">
    <i class="fas fa-plus mg-r5"></i>Tambah
</a>

<div class="container mg-t15">
<?php
    if ($career) {
        foreach ($career->data as $c) {
            ?>
            <div class="x-form-daftar-pemain row">
                <a href="javascript:void(0)" title="Hapus" id="delkarir_<?php echo $c->id_career; ?>" class="form_post" action="member" fn="playerkariract"
                   confirm="Apakah anda yakin ingin menghapusnya?">
                    <i class="fas fa-times" style="float:right; font-size:.9em;"></i>
                    <span class="cinput disp-none" name="act" val="2"></span>
                    <input type="hidden" name="xid" value="<?php echo $this->input->post('uid'); ?>" class="cinput">
                    <input type="hidden" name="uid" value="<?php echo $player->slug; ?>" class="cinput">
                    <input type="hidden" name="id" value="<?php echo $c->id_career; ?>" class="cinput">
                </a>
                <a href="<?php echo base_url('member/player/?tab=karir&uid=' . $this->input->post('uid') . '&act=' . $c->id_career); ?>" title="Edit">
                    <i class="far fa-edit mg-r10" style="float:right; font-size:.9em;"></i>
                </a>
                <div class="col-xs-12 pd-t-19 edits dftr-pemain">
                    <span><?php echo $c->tournament; ?></span>
                    <span><?php echo $c->club; ?></span>
                    <span class="tx-cp">Bulan : <?php echo $this->library->monthFixed($c->month); ?></span>
                    <span>Tahun : <?php echo $c->year; ?></span>
                    <span>Jumlah Main : <?php echo $c->number_of_play; ?></span>
                </div>
            </div>
            <?php
        }

        $this->library->backnext('pageplayerkarir', 'pagetotalplayerkarir', $careercount, 'member', 'playerkarir', 20, ['uid' => $this->input->post('uid')]);
    }
?>
</div>
