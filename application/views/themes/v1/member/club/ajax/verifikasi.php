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
    if ($verify) {
        foreach ($verify->data as $ver) {
            ?>
            <div class="x-form-daftar-pemain row">
                <a href="<?php echo base_url('member/verifikasi/?act=' . $ver->id); ?>" title="Edit">
                    <i class="far fa-edit mg-r10" style="float:right; font-size:.9em;"></i>
                </a>
                <div class="col-xs-4 edits">
                    <div class="img-round">
                        <img src="<?php echo $ver->url_photo; ?>" alt="">
                    </div>
                </div>
                <div class="col-xs-8 pd-t-19 edits dftr-pemain">
                    <span><?= $ver->name; ?></span>
                    <span>No. KK : <?= $ver->no_kk; ?></span>
                    <span>No. Identitas : <?= $ver->no_ktp; ?></span>
                    <span>Registrasi : <?= date('d M Y', strtotime($ver->date_create)); ?></span>
                </div>
            </div>
            <?php
        }

        $this->library->backnext('pageverify', 'pagetotalverify', $verifycount, 'member', 'verify', 20);
    }
    ?>
</div>
