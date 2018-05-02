<a href="<?php echo base_url('member/karir/?act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-plus mg-r5"></i>Tambah</a>
<div class="container mg-tb15">
    <div class="pp-profil">
        <img src="<?php echo ($club AND $club->url_logo) ? $club->url_logo : base_url("assets/themes/v1/img/fav.png"); ?>" alt="" class="viewimg">
    </div>
    <div class="full-width tx-center mg-tb15">
        <?php echo ($club) ? $club->name : ''; ?>
    </div>
</div>

<div class="container mg-t15">
    <?php
    if ($career) {
        foreach ($career->data as $c) {
            ?>
            <div class="x-form-daftar-pemain row">
                <a href="javascript:void(0)" title="Hapus" id="delcareer_<?php echo $c->id_career; ?>" class="form_post" action="member" fn="clubcareeract"
                   confirm="Apakah anda yakin ingin menghapusnya?">
                    <i class="fas fa-times" style="float:right; font-size:.9em;"></i>
                    <span class="cinput disp-none" name="act" val="2"></span>
                    <input type="hidden" name="id" value="<?php echo $c->id_career; ?>" class="cinput">
                </a>
                <a href="<?php echo base_url('member/karir/?act=' . $c->id_career); ?>" title="Edit">
                    <i class="far fa-edit mg-r10" style="float:right; font-size:.9em;"></i>
                </a>
                <div class="col-xs-12 pd-t-19 edits dftr-pemain">
                    <span><?php echo $c->tournament; ?></span>
                    <span class="tx-cp">Bulan : <?php echo $this->library->monthFixed($c->month); ?></span>
                    <span>Tahun : <?php echo $c->year; ?></span>
                    <span>Peringkat : <?php echo $c->rank; ?></span>
                    <span>Pelatih : <?php echo $c->coach; ?></span>
                </div>
            </div>
            <?php
        }

        $this->library->backnext('pageclubcareer', 'pagetotalclubcareer', $careercount, 'member', 'clubcareer', 20);
    }
    ?>
</div>
