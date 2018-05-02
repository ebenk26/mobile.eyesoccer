<script>
    $(document).ready(function () {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.viewimg').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#filepic').change(function () {
            readURL(this);
        });
    });
</script>

<div class="container">
    <div class="pp-profil">
        <img src="<?php echo ($player AND $player->url_pic) ? $player->url_pic : SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player">
    </div>
    <div class="full-width tx-center mg-tb15">
        <?php echo $player->name; ?>
    </div>
</div>

<?php
    $uid = (isset($_GET['uid'])) ? $_GET['uid'] : $this->input->post('uid');
    if ($uid != '') {
        $data['active'] = 'galeri';
        $this->load->view($folder . 'member/player/header', $data);
    }
?>

<div class="container mg-b15">
    <form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="fn" class="cinput" value="playergalleryact">
        <input type="hidden" name="xid" class="cinput" value="<?php echo $uid; ?>">
        <input type="hidden" name="uid" class="cinput" value="<?php echo ($player) ? $player->slug : ''; ?>">
        <input type="hidden" name="act" class="cinput" value="1">
        <div class="full-width col-xs-7 container tx-c" style="padding:0px;">
            <div class="gal-upload">
                <img src="<?php echo SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player" class="viewimg">
            </div>
        </div>
        <div class="full-width col-xs-5 container tx-c" style="box-sizing:border-box;">
            <label class="klik-dsn disp-inblock mg-b10 mg-b15">
                Upload Photo
                <input type="file" name="fupload" id="filepic" style="display: none;" accept="image/*">
            </label>
            <button class="btn-blue">Simpan</button>
        </div>
    </form>
</div>

<div class="pad-lr15 pad-b15">
    <?php
    if ($gallery) {
        foreach ($gallery->data as $c) {
            ?>
            <div class="player-galeri">
                <a href="javascript:void(0)" title="Hapus" id="delgallery_<?php echo $c->id; ?>" class="form_post" action="member" fn="playergalleryact"
                   confirm="Apakah anda yakin ingin menghapusnya?">
                    <i class="fas fa-times"></i>
                    <span class="cinput disp-none" name="act" val="2"></span>
                    <input type="hidden" name="xid" value="<?php echo $this->input->post('uid'); ?>" class="cinput">
                    <input type="hidden" name="uid" value="<?php echo $player->slug; ?>" class="cinput">
                    <input type="hidden" name="id" value="<?php echo $c->id; ?>" class="cinput">
                </a>
                <div class="pad">
                    <span style="background-image: url('<?php echo $c->url_pic; ?>')" class="img"></span>
                </div>
            </div>
            <?php
        }

        ?>
            <div class="mg-t10">
                <?php $this->library->backnext('pageplayergallery', 'pagetotalplayergallery', $gallerycount, 'member', 'playergallery', 20, ['uid' => $this->input->post('uid')]); ?>
            </div>
        <?php
    }
    ?>
</div>
