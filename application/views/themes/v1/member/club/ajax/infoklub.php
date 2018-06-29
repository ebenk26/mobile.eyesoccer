<?php
if ($klubdetail) {
    $v = $klubdetail->data;
	// echo '<pre>';print_r($v);
    ?>
    <form class='form_multi' action="<?= base_url('member'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="fn" class="cinput" value="editclub">
        <input type="hidden" name="id_club" value="<?php echo $v[0]->id_club; ?>">
        <input type="hidden" name="slug" value="<?php echo $v[0]->slug; ?>">
        <div class="container mt20">
            <div class="pp-profil">
                <img src="<?php echo(!empty($v[0]->url_logo) ? $v[0]->url_logo : base_url() . "assets/themes/v1/img/fav.png") ?>" alt="" class="viewimg">
            </div>
            <div class="full-width">
                <label class="btn-blue">
                    Ganti Logo
                    <input id="file_pic" name="logo" type="file" style="display: none;">
                </label>
            </div>
        </div>
        <div class="container data-profil mg-t15">
            <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
            <table>
                <tr>
                    <td>Nama Klub <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="name" value="<?php echo $v[0]->name; ?>">
                        <span class='err msgname'></span>
                    </td>
                </tr>
                <tr>
                    <td>Nama Panggilan <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="nickname" value="<?php echo $v[0]->nickname; ?>">
                        <span class='err msgnickname'></span>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi Klub <span class="cl-red">*</span></td>
                    <td>
                        <textarea name="description" rows="5"><?php echo strip_tags($v[0]->description); ?></textarea>
                        <span class='err msgdescription'></span>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal didirikan</td>
                    <td>
                        <input type="text" name="establish_date" value="<?php echo ($v[0]->establish_date == '0000-00-00' ? "00-00-0000" : date('d-m-Y', strtotime($v[0]->establish_date))); ?>" id="birthdate">
                        <span class='err msgestablish_date'></span>
                    </td>
                </tr>
                <tr>
                    <td>No. Telp <span class="cl-red">*</span></td>
                    <td>
                        <input type="number" name="phone" value="<?php echo $v[0]->phone; ?>">
                        <span class='err msgphone'></span>
                    </td>
                </tr>
                <tr>
                    <td>Email <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="email" value="<?php echo $v[0]->email; ?>">
                        <span class='err msgemail'></span>
                    </td>
                </tr>
                <tr>
                    <td>Alamat Klub <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="address" value="<?php echo strip_tags($v[0]->address); ?>">
                        <span class='err msgaddress'></span>
                    </td>
                </tr>
                <tr>
                    <td>Provinsi <span class="cl-red">*</span></td>
                    <td>
                        <select name="provinsi" selected="true" class="slc-musim form_change" action="member" fn="get_kabupaten" loading="off" dest="opt-kabupaten">
                            <option value="">--Pilih Provinsi--</option>
                            <?php
                            if ($provinsi) {
                                foreach ($provinsi as $dt) {
                                    if ($v[0]->id_provinsi == $dt->IDProvinsi) {
                                        ?>
                                        <option value="<?php echo $dt->IDProvinsi ?>" selected>
                                            <?php echo $dt->nama; ?>
                                        </option>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="<?php echo $dt->IDProvinsi ?>">
                                            <?php echo $dt->nama; ?>
                                        </option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                        <span class='err msgprovinsi'></span>
                    </td>
                </tr>
                <tr>
                    <td>Kabupaten <span class="cl-red">*</span></td>
                    <td class="opt-kabupaten">
                        <select id="kabupaten" name="kabupaten" class="form-control">
                            <option value="">--Pilih Kabupaten--</option>
                            <?php
                            foreach ($kabupaten as $dt) {
                                if ($v[0]->id_kabupaten == $dt->IDKabupaten) {
                                    ?>
                                    <option value="<?php echo $dt->IDKabupaten ?>" selected>
                                        <?php echo $dt->nama; ?>
                                    </option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="<?php echo $dt->IDKabupaten ?>">
                                        <?php echo $dt->nama; ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <span class='err msgkabupaten'></span>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pelatih <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="coach" value="<?php echo $v[0]->coach; ?>">
                        <span class='err msgcoach'></span>
                    </td>
                </tr>
                <tr>
                    <td>Nama Manager <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="manager" value="<?php echo $v[0]->manager; ?>">
                        <span class='err msgmanager'></span>
                    </td>
                </tr>
                <tr>
                    <td>Nama Supporter</td>
                    <td>
                        <input type="text" name="supporter_name" value="<?php echo $v[0]->supporter_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Alumni</td>
                    <td>
                        <input type="text" name="alumnus_name" value="<?php echo ($v[0]->alumnus_name == 'undefined' ? '' : $v[0]->alumnus_name); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Pemilik <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="owner" value="<?php echo $v[0]->owner; ?>">
                        <span class='err msgowner'></span>
                    </td>
                </tr>
                <tr>
                    <td>Nama Penanggung Jawab <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="namecharge" value="<?php echo $v[0]->name_pncharge; ?>">
                        <span class='err msgnamecharge'></span>
                    </td>
                </tr>
                <tr>
                    <td>Identitas Penanggung Jawab (KTP / SIM / Passport)</td>
                    <td>
                        <img src="<?php echo(!empty($v[0]->url_pncharge) ? $v[0]->url_pncharge : base_url() . "assets/themes/v1/img/No_Image_Available.png") ?>" alt="" class="pp-profil viewimgpt" style="border-radius: unset;background:whitesmoke;">
                        <?php
                        if ($v[0]->url_pncharge == '') {
                            ?>
                            <input id="url_pncharge" type="file" name="url_pncharge">
                            <?php
                        }
                        ?>
                        <span class='err msglegal_pt'></span>
                    </td>
                </tr>
                <tr>
                    <td>Nama Stadion</td>
                    <td>
                        <input type="text" name="stadium" value="<?php echo ($v[0]->stadium == 'undefined' ? '' : $v[0]->stadium); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat Stadion</td>
                    <td>
                        <textarea name="stadium_address" rows="5"><?php echo $v[0]->stadium_address; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Kapasitas Stadion</td>
                    <td>
                        <input name="stadium_capacity" value="<?php echo ($v[0]->stadium_capacity == 'undefined' ? '' : $v[0]->stadium_capacity); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat Latihan <span class="cl-red">*</span></td>
                    <td>
                        <textarea name="training_address" rows="5"><?php echo $v[0]->training_address; ?></textarea>
                        <span class='err msgtraining_address'></span>
                    </td>
                </tr>
				<tr>
                    <td>Jadwal Latihan <span class="cl-red">*</span></td>
                    <td>
                        <textarea name="training_schedule" rows="5"><?php echo $v[0]->training_schedule; ?></textarea>
                        <span class='err msgtraining_schedule'></span>
                    </td>
                </tr>
				<tr>
                    <td>Informasi Pendaftaran</td>
                    <td>
						<textarea name="register_desc" rows="5"><?php echo $v[0]->register_desc; ?></textarea>
						<span class='err msgregister_desc'></span>
                    </td>
                </tr>
				<tr>
                    <td>Biaya Pendaftaran</td>
                    <td>
						<input type="number" name="register_price" value="<?php echo $v[0]->register_price; ?>">
                        <span class='err msgregister_price'></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas PT / Yayasan / Koperasi</td>
                    <td>
                        <img src="<?php echo(!empty($v[0]->legalitas_pt) ? $v[0]->url_pt : base_url() . "assets/themes/v1/img/No_Image_Available.png") ?>" alt="" class="pp-profil viewimgpt" style="border-radius: unset;background:whitesmoke;">
                        <?php
                            if ($v[0]->legalitas_pt == '') {
                        ?>
                                <input id="legal_pt" type="file" name="legal_pt">
                        <?php
                            }
                        ?>
                        <span class='err msglegal_pt'></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas Kemenkumham</td>
                    <td>
                        <img src="<?php echo(!empty($v[0]->legalitas_kemenham) ? $v[0]->url_kemenham : base_url() . "assets/themes/v1/img/No_Image_Available.png") ?>" alt="" class="pp-profil viewimgkemenham" style="border-radius: unset;background:whitesmoke;">
                        <?php
                            if ($v[0]->legalitas_kemenham == '') {
                        ?>
                                <input id="legal_kemenham" type="file" name="legal_kemenham">
                        <?php
                            }
                        ?>
                        <span class='err msglegal_kemenham'></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas NPWP</td>
                    <td>
                        <img src="<?php echo(!empty($v[0]->legalitas_npwp) ? $v[0]->url_npwp : base_url() . "assets/themes/v1/img/No_Image_Available.png") ?>" alt="" class="pp-profil viewimgnpwp" style="border-radius: unset;background:whitesmoke;">
                        <?php
                            if ($v[0]->legalitas_npwp == '') {
                        ?>
                                <input id="legal_npwp" type="file" name="legal_npwp">
                        <?php
                            }
                        ?>
                        <span class='err msglegal_npwp'></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas Dirut</td>
                    <td>
                        <img src="<?php echo(!empty($v[0]->legalitas_dirut) ? $v[0]->url_dirut : base_url() . "assets/themes/v1/img/No_Image_Available.png") ?>" alt="" class="pp-profil viewimgdirut" style="border-radius: unset;background:whitesmoke;">
                        <?php
                            if ($v[0]->legalitas_dirut == '') {
                        ?>
                                <input id="legal_dirut" type="file" name="legal_dirut">
                        <?php
                            }
                        ?>
                        <span class='err msglegal_dirut'></span>
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
    <?php
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

        $("#file_pic").change(function () {
            readURL(this);
        });
		
		function readURLPT(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.viewimgkemenham').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#legal_kemenham").change(function () {
            readURLPT(this);
        });
		
		function readURLKEMENHAM(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.viewimgpt').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#legal_pt").change(function () {
            readURLKEMENHAM(this);
        });
		function readURLNPWP(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.viewimgnpwp').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#legal_npwp").change(function () {
            readURLNPWP(this);
        });
		
		function readURLDIRUT(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.viewimgdirut').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#legal_dirut").change(function () {
            readURLDIRUT(this);
        });

        $('#birthdate').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });
    });
</script>