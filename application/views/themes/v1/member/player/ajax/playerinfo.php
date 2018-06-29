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

<?php $player = ($player AND isset($player->data[0])) ? $player->data[0] : ''; ?>

<form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
    <div class="container mt20">
        <div class="pp-profil">
            <img src="<?php echo ($player AND $player->url_pic) ? $player->url_pic : SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player" class="viewimg">
        </div>
        <div class="full-width">
            <label class="btn-blue disp-block mg-b10 mg-b15">
                Upload Photo
                <input type="file" name="photo" id="filepic" style="display: none;">
            </label>
        </div>
    </div>
    <?php
        $uid = (isset($_GET['uid'])) ? $_GET['uid'] : $this->input->post('uid');
        if ($uid != '') {
            $data['active'] = 'profil';
            $this->load->view($folder . 'member/player/header', $data);
        }
    ?>
    <div class="container data-profil">
        <input type="hidden" name="fn" class="cinput" value="playeract">
        <input type="hidden" name="uid" class="cinput" value="<?php echo ($player) ? $player->slug : ''; ?>">
        <input type="hidden" name="act" class="cinput" value="<?php echo ($player) ? 1 : 0; ?>">
        <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
        <table>
            <tr>
                <td>Nama <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="name" value="<?php echo ($player) ? $player->name : ''; ?>">
                    <span class="err msgname"></span>
                </td>
            </tr>
            <tr>
                <td>Nama Panggilan <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="nickname" value="<?php echo ($player) ? $player->nickname : ''; ?>">
                    <span class="err msgnickname"></span>
                </td>
            </tr>
			<tr>
                <td>Alamat <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="address" value="<?php echo ($player) ? $player->address : ''; ?>">
                    <span class="err msgaddress"></span>
                </td>
            </tr>
            <tr>
                <td>Deskripsi <span class="cl-red">*</span></td>
                <td>
                    <textarea name="description" rows="5"><?php echo ($player) ? strip_tags($player->description) : ''; ?></textarea>
                    <span class="err msgdescription"></span>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="birth_place" value="<?php echo ($player) ? $player->birth_place : ''; ?>">
                    <span class="err msgbirth_place"></span>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="birth_date" id="birthdate" value="<?php echo ($player) ? date('d-m-Y', strtotime($player->birth_date)) : ''; ?>">
                    <span class="err msgbirth_date"></span>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>
                    <input type="text" name="phone" value="<?php echo ($player) ? $player->phone : ''; ?>">
                    <span class="err msgphone"></span>
                </td>
            </tr>
            <tr>
                <td>No. Hp <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="mobile" value="<?php echo ($player) ? $player->mobile : ''; ?>">
                    <span class="err msgmobile"></span>
                </td>
            </tr>
            <tr>
                <td>Email <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="email" value="<?php echo ($player) ? $player->email : ''; ?>">
                    <span class="err msgemail"></span>
                </td>
            </tr>
            <?php
            if (empty($player)) {
                ?>
                <!--<tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="<?php /*echo ($player) ? $player->username : ''; */?>">
                        <span class="err msgusername"></span>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" name="password" value="<?php /*echo ($player) ? $player->password : ''; */?>">
                        <span class="err msgpassword"></span>
                    </td>
                </tr>-->
                <?php
            }
            ?>
            <tr>
                <td>Tinggi <span class="cl-red">*</span></td>
                <td>
                    <input type="number" min="1" name="height" value="<?php echo ($player) ? $player->height : ''; ?>" placeholder="cm">
                    <span class="err msgheight"></span>
                </td>
            </tr>
            <tr>
                <td>Berat <span class="cl-red">*</span></td>
                <td>
                    <input type="number" min="1" name="weight" value="<?php echo ($player) ? $player->weight : ''; ?>" placeholder="kg">
                    <span class="err msgweight"></span>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin <span class="cl-red">*</span></td>
                <td>
                    <select name="gender">
                        <option value="">- Pilih Jenis Kelamin -</option>
                        <?php
                        $gender = array('1' => 'Laki-laki', '2' => 'Perempuan');
                        foreach ($gender as $n => $v) {
                            if ($player AND $n == $player->gender) {
                                echo "<option value='$n' selected>$v</option>";
                            } else {
                                echo "<option value='$n'>$v</option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="err msggender"></span>
                </td>
            </tr>
            <tr>
                <td>Negara <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="nationality" value="<?php echo ($player) ? $player->nationality : ''; ?>">
                    <span class="err msgnationality"></span>
                </td>
            </tr>
            <tr>
                <td>Posisi Utama <span class="cl-red">*</span></td>
                <td>
                    <select name="position_a">
                        <option value="">- Pilih Posisi Utama -</option>
                        <?php
                        if ($position) {
                            foreach ($position->data as $v) {
                                if ($player AND $v->id_position == $player->position_a) {
                                    echo "<option value='$v->id_position' selected>$v->position</option>";
                                } else {
                                    echo "<option value='$v->id_position'>$v->position</option>";
                                }
                            }
                        }
                        ?>
                    </select>
                    <span class="err msgposition_a"></span>
                </td>
            </tr>
            <tr>
                <td>Posisi Cadangan</td>
                <td>
                    <select name="position_b">
                        <option value="">- Pilih Posisi Cadangan -</option>
                        <?php
                        if ($position) {
                            foreach ($position->data as $v) {
                                if ($player AND $v->id_position == $player->position_b) {
                                    echo "<option value='$v->id_position' selected>$v->position</option>";
                                } else {
                                    echo "<option value='$v->id_position'>$v->position</option>";
                                }
                            }
                        }
                        ?>
                    </select>
                    <span class="err msgposition_b"></span>
                </td>
            </tr>
            <tr>
                <td>Nomor Punggung <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="back_number" value="<?php echo ($player) ? $player->back_number : ''; ?>">
                    <span class="err msgback_number"></span>
                </td>
            </tr>
            <tr>
                <td>Kemampuan Kaki <span class="cl-red">*</span></td>
                <td>
                    <select name="foot">
                        <option value="">- Pilih Kemampuan Kaki -</option>
                        <?php
                        if ($foot) {
                            foreach ($foot->data as $v) {
                                if ($player AND $v->id_foot == $player->id_foot) {
                                    echo "<option value='$v->id_foot' selected>$v->foot</option>";
                                } else {
                                    echo "<option value='$v->id_foot'>$v->foot</option>";
                                }
                            }
                        }
                        ?>
                    </select>
                    <span class="err msgfoot"></span>
                </td>
            </tr>
            <tr>
                <td>Favorit Klub</td>
                <td>
                    <input type="text" name="fav_club" value="<?php echo ($player) ? $player->fav_club : ''; ?>">
                    <span class="err msgfav_club"></span>
                </td>
            </tr>
            <tr>
                <td>Favorit Pemain</td>
                <td>
                    <input type="text" name="fav_player" value="<?php echo ($player) ? $player->fav_player : ''; ?>">
                    <span class="err msgfav_player"></span>
                </td>
            </tr>
            <tr>
                <td>Favorit Pelatih</td>
                <td>
                    <input type="text" name="fav_coach" value="<?php echo ($player) ? $player->fav_coach : ''; ?>">
                    <span class="err msgfav_coach"></span>
                </td>
            </tr>
            <!--<tr>
                <td>Kisaran Gaji</td>
                <td>
                    <input type="text" name="contract_start" value="<?php /*echo ($player) ? $player->contract_start : ''; */?>" placeholder="Start">
                    <span class="err msgcontract_start"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="text" name="contract_end" value="<?php /*echo ($player) ? $player->contract_end : ''; */?>" placeholder="End">
                    <span class="err msgcontract_end"></span>
                </td>
            </tr>-->
            <tr>
                <td>Nama Bapak</td>
                <td>
                    <input type="text" name="father" value="<?php echo ($player) ? $player->father : ''; ?>">
                    <span class="err msgfather"></span>
                </td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>
                    <input type="text" name="mother" value="<?php echo ($player) ? $player->mother : ''; ?>">
                    <span class="err msgmother"></span>
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
