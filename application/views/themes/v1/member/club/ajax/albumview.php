<a href="<?php echo base_url('member/galeri/?view='.$view.'&tab=video&act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-video mg-r5"></i>Upload Video</a>
<a href="<?php echo base_url('member/galeri/?view='.$view.'&tab=photo&act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-images mg-r5"></i>Upload Photo</a>
<a href="<?php echo base_url('member/galeri/?view='.$view.'&tab=album&act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-plus mg-r5"></i>Tambah Album</a>
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
    if ($gallery) {
        foreach ($gallery->data as $g) {
            ?>
            <div class="player-galeri">
                <a href="javascript:void(0)" title="Hapus" id="delgalericlub_<?php echo $g->id; ?>" class="form_post" action="member" fn="deletegalericlub"
                   confirm="Apakah anda yakin ingin menghapusnya?">
                    <i class="fas fa-times" style="float:right; font-size:.9em;position: relative;top: 5px;"></i>
                    <input type="hidden" name="uid" value="<?php echo $g->id; ?>" class="cinput">
                    <input type='hidden' name='view' value='<?php echo $view; ?>' class='cinput'>
                </a>
                <div class="pad">
                    <span style="background-image: url('<?php echo $g->url_pic; ?>')" class="img"></span>
                </div>
            </div>
            <?php
        }

        $this->library->backnext('pageclubalbumview', 'pagetotalclubalbumview', $gallerycount, 'member', 'clubalbumview', 20);
    }
    ?>
</div>
