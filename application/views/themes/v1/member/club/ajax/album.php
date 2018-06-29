<a href="<?php echo base_url('member/galeri/?tab=video&act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-video mg-r5"></i>Upload Video</a>
<a href="<?php echo base_url('member/galeri/?tab=photo&act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-images mg-r5"></i>Upload Photo</a>
<a href="<?php echo base_url('member/galeri/?tab=album&act=add'); ?>" class="btn-white-orange fl-r"><i class="fas fa-plus mg-r5"></i>Tambah Album</a>
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
    if ($album) {
        foreach ($album->data as $c) {
            ?>
            <div class="x-form-daftar-pemain row">
                <a href="javascript:void(0)" title="Hapus" id="delalbum_<?php echo $c->id_folder; ?>" class="form_post" action="member" fn="clubalbumact"
                   confirm="Apakah anda yakin ingin menghapusnya?">
                    <i class="fas fa-times" style="float:right; font-size:.9em;"></i>
                    <span class="cinput disp-none" name="act" val="2"></span>
                    <input type="hidden" name="id" value="<?php echo $c->slug; ?>" class="cinput">
                </a>
                <a href="<?php echo base_url('member/galeri/?tab=album&act=' . $c->id_folder); ?>" title="Edit">
                    <i class="fas fa-edit mg-r10" style="float:right; font-size:.9em;"></i>
                </a>
                <a href="<?php echo base_url('member/galeri/?view=' . $c->slug); ?>" title="View">
                    <i class="fas fa-search mg-r10" style="float:right; font-size:.9em;"></i>
                </a>
                <div class="col-xs-4 edits">
                    <div class="img-round">
                        <img src="<?php echo $c->url_pic; ?>" alt="">
                    </div>
                </div>
                <div class="col-xs-8 pd-t-19 edits dftr-pemain">
                    <span><?php echo $c->title; ?></span>
                    <span><?php echo $c->count_gallery; ?> File</span>
                </div>
            </div>
            <?php
        }

        $this->library->backnext('pageclubalbum', 'pagetotalclubalbum', $albumcount, 'member', 'clubalbum', 20);
    }
    ?>
</div>
