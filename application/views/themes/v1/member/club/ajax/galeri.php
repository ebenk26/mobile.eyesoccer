<div class="container">
    <form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
        <label class="btn-white-orange fl-r" style="margin:  unset;">
            <i class="fas fa-plus mg-r5"></i>Upload Photo
            <input type="file" name="fupload" id="filepic" style="display: none;" accept="image/*">
        </label>
        <input type="hidden" name="fn" class="cinput" value="uploadgalericlub">
        <input type="hidden" name="act" class="cinput" value="1">
        <div class="full-width col-xs-7 container tx-c" style="padding:0px;">
            <div class="pp-profil">
                <img src="<?php echo(!empty($v[0]->url_logo) ? $v[0]->url_logo : base_url() . "assets/themes/v1/img/fav.png") ?>" alt="" class="viewimg">
            </div>
        </div>
        <div class="full-width col-xs-5 container tx-c" style="box-sizing:border-box;">
            <button class="btn-blue">Simpan</button>
        </div>
    </form>
</div>

<?php
if ($galerilist) {
    foreach ($galerilist->data as $g) {
        ?>
        <div class="player-galeri">
            <a href="javascript:void(0)" title="Hapus" id="delgalericlub_<?php echo $g->id; ?>" class="form_post" action="member" fn="deletegalericlub"
               confirm="Apakah anda yakin ingin menghapusnya?">
                <i class="fas fa-times" style="float:right; font-size:.9em;position: relative;top: 5px;"></i>
                <input type="hidden" name="uid" value="<?php echo $g->id; ?>" class="cinput">
            </a>
            <div class="pad">
                <span style="background-image: url('<?php echo $g->url_pic; ?>')" class="img"></span>
            </div>
        </div>
        <?php
    }
}
?>

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