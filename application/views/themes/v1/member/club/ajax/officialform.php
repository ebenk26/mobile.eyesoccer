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

        $('#birthdate').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });
    });
</script>

<?php $official = ($official) ? $official->data[0] : ''; ?>

<form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
    <div class="container">
        <div class="pp-profil">
            <img src="<?php echo ($official AND $official->url_pic) ? $official->url_pic : SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Ofisial" class="viewimg">
        </div>
        <div class="full-width">
            <label class="btn-blue disp-block mg-tb15">
                Upload Photo
                <input type="file" name="photo" id="filepic" style="display: none;" accept="image/*">
            </label>
        </div>
    </div>

    <div class="container data-profil">
        <input type="hidden" name="fn" class="cinput" value="clubofficialact">
        <input type="hidden" name="act" class="cinput" value="<?php echo ($official) ? 1 : 0; ?>">
        <input type="hidden" name="id" class="cinput" value="<?php echo ($official) ? $official->id_official : ''; ?>">
        <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
        <table>
            <tr>
                <td>Nama <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="name" value="<?php echo ($official) ? $official->name : ''; ?>">
                    <span class="err msgname"></span>
                </td>
            </tr>
            <tr>
                <td>Posisi <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="position" value="<?php echo ($official) ? $official->position : ''; ?>">
                    <span class="err msgposition"></span>
                </td>
            </tr>
            <tr>
                <td>Negara <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="nationality" value="<?php echo ($official) ? $official->nationality : ''; ?>">
                    <span class="err msgnationality"></span>
                </td>
            </tr>
            <tr>
                <td>Lisensi <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="license" value="<?php echo ($official) ? $official->license : ''; ?>">
                    <span class="err msglicense"></span>
                </td>
            </tr>
            <tr>
                <td>No Identitas <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="no_identity" value="<?php echo ($official) ? $official->no_identity : ''; ?>">
                    <span class="err msgno_identity"></span>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="birth_place" value="<?php echo ($official) ? $official->birth_place : ''; ?>">
                    <span class="err msgbirth_place"></span>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="birth_date" id="birthdate" value="<?php echo ($official) ? date('d-m-Y', strtotime($official->birth_date)) : ''; ?>">
                    <span class="err msgbirth_date"></span>
                </td>
            </tr>
            <tr>
                <td>Alamat <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="address" value="<?php echo ($official) ? $official->address : ''; ?>">
                    <span class="err msgaddress"></span>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>
                    <input type="text" name="phone" value="<?php echo ($official) ? $official->phone : ''; ?>">
                    <span class="err msgphone"></span>
                </td>
            </tr>
            <tr>
                <td>Email <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="email" value="<?php echo ($official) ? $official->email : ''; ?>">
                    <span class="err msgemail"></span>
                </td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>
                    <input type="text" name="contact" value="<?php echo ($official) ? $official->contact : ''; ?>">
                    <span class="err msgcontact"></span>
                </td>
            </tr>
            <tr>
                <td>Kontrak</td>
                <td>
                    <input type="text" name="contract" value="<?php echo ($official) ? $official->contract : ''; ?>">
                    <span class="err msgcontract"></span>
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
