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

<?php $member = ($member) ? $member->data[0] : ''; ?>

<form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
    <div class="container">
        <div class="pp-profil">
            <img src="<?php echo ($member AND $member->url_pic) ? $member->url_pic : SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player" class="viewimg">
        </div>
        <div class="full-width">
            <label class="btn-blue disp-block mg-b10 mg-b15">
                Upload Photo
                <input type="file" name="fupload" id="filepic" style="display: none;" accept="image/*">
            </label>
        </div>
    </div>

    <div class="container data-profil">
        <input type="hidden" name="fn" class="cinput" value="profileact">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="name" value="<?php echo ($member) ? $member->fullname : ''; ?>">
                    <span class="err msgfullname"></span>
                </td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>
                    <input type="text" name="nickname" value="<?php echo ($member) ? $member->name : ''; ?>">
                    <span class="err msgname"></span>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="address" rows="5"><?php echo ($member) ? $member->address : ''; ?></textarea>
                    <span class="err msgaddress"></span>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>
                    <input type="text" name="phone" value="<?php echo ($member) ? $member->phone : ''; ?>">
                    <span class="err msgphone"></span>
                </td>
            </tr>
            <tr>
                <td>Tentang Saya</td>
                <td>
                    <input type="text" name="about" value="<?php echo ($member) ? $member->about : ''; ?>">
                    <span class="err msgabout"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="tx-c">
                    <button class="klik-dsn">Simpan</button>
                </td>
            </tr>
        </table>
    </div>
</form>
