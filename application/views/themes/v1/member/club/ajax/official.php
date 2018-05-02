<a href="<?php echo base_url('member/official/?act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-plus mg-r5"></i>Tambah</a>
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
    if ($official) {
        foreach ($official->data as $p) {
            ?>
            <div class="x-form-daftar-pemain row">
                <a href="javascript:void(0)" title="Hapus" id="delofficial_<?php echo $p->id_official; ?>" class="form_post" action="member" fn="clubofficialact"
                   confirm="Apakah anda yakin ingin menghapusnya?">
                    <i class="fas fa-times" style="float:right; font-size:.9em;"></i>
                    <span class="cinput disp-none" name="act" val="2"></span>
                    <input type="hidden" name="id" value="<?php echo $p->id_official; ?>" class="cinput">
                </a>
                <a href="<?php echo base_url('member/official/?act=' . $p->id_official); ?>"><i class="far fa-edit mg-r10" style="float:right; font-size:.9em;"></i></a>
                <div class="col-xs-4 edits">
                    <div class="img-round">
                        <img src="<?php echo $p->url_pic; ?>" alt="">
                    </div>
                </div>
                <div class="col-xs-8 pd-t-19 edits dftr-pemain">
                    <span><?php echo $p->name; ?></span>
                    <span>Lisensi : <?php echo $p->license; ?></span>
                    <span><?php echo $p->position; ?></span>
                    <span><?php echo $p->nationality; ?></span>
                </div>
            </div>
            <?php
        }

        $this->library->backnext('pageofficial', 'pagetotalofficial', $officialcount, 'member', 'clubofficial', 20);
    }
    ?>
</div>
