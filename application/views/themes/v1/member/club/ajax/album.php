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
            <div class="x-form-daftar-pemain row" style="    background-image: url(<?php echo $c->url_pic; ?>);background-repeat: no-repeat;background-position: center center;background-size: cover;" >
                <div class="container">
                <a href="<?php echo base_url('member/galeri/?view=' . $c->slug); ?>" title="View" style="position:  absolute;z-index:  1;display:  block;width:  100%;height:  100%;top:  0px;left:  0px;"></a>
                    <a href="javascript:void(0)" title="Hapus" id="delalbum_<?php echo $c->id_folder; ?>" class="form_post" action="member" fn="clubalbumact"
                    confirm="Apakah anda yakin ingin menghapusnya?">
                        <i class="fas fa-times" style="font-size:.9em;color:  white;text-shadow: 2px -1px #00000036;z-index:  2;position:  absolute;right: 10px;"></i>
                        <span class="cinput disp-none" name="act" val="2"></span>
                        <input type="hidden" name="id" value="<?php echo $c->slug; ?>" class="cinput">
                    </a>
                    <a href="<?php echo base_url('member/galeri/?tab=album&act=' . $c->id_folder); ?>" title="Edit">
                        <i class="fas fa-edit mg-r10" style="font-size:.9em;color:  white;position:  absolute;text-shadow: 2px -1px #00000036;z-index:  2;right: 20px;"></i>
                    </a>
                </div>        
                <div class="container text-album-bg">
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
