<?php $career = ($career) ? $career->data[0] : ''; ?>

<form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
    <div class="container">
        <div class="pp-profil">
            <img src="<?php echo ($player AND $player->url_pic) ? $player->url_pic : SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player" class="viewimg">
        </div>
        <div class="full-width tx-center mg-tb15">
            <?php echo $player->name; ?>
        </div>
    </div>

    <?php
        $uid = (isset($_GET['uid'])) ? $_GET['uid'] : $this->input->post('uid');
        if ($uid != '') {
            $data['active'] = 'karir';
            $this->load->view($folder . 'member/player/header', $data);
        }
    ?>

    <div class="container data-profil">
        <input type="hidden" name="fn" class="cinput" value="playerkariract">
        <input type="hidden" name="xid" class="cinput" value="<?php echo $uid; ?>">
        <input type="hidden" name="uid" class="cinput" value="<?php echo ($player) ? $player->slug : ''; ?>">
        <input type="hidden" name="act" class="cinput" value="<?php echo ($career) ? 1 : 0; ?>">
        <input type="hidden" name="id" class="cinput" value="<?php echo ($career) ? $career->id_career : ''; ?>">
        <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
        <table>
            <tr>
                <td>Bulan <span class="cl-red">*</span></td>
                <td>
                    <select name="month" class="tx-cp">
                        <?php
                        foreach ($this->library->monthDate() as $m) {
                            $m = $this->library->monthFixed($m);
                            if ($career AND $career->month == $m) {
                                echo "<option value='$m' selected>$m</option>";
                            } else {
                                echo "<option value='$m'>$m</option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="err msgmonth"></span>
                </td>
            </tr>
            <tr>
                <td>Tahun <span class="cl-red">*</span></td>
                <td>
                    <input type="number" min="0" name="year" value="<?php echo ($career) ? $career->year : date('Y'); ?>">
                    <span class="err msgyear"></span>
                </td>
            </tr>
            <tr>
                <td>Klub <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="club" value="<?php echo ($career) ? $career->club : ''; ?>">
                    <span class="err msgclub"></span>
                </td>
            </tr>
            <tr>
                <td>Turnament <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="tournament" value="<?php echo ($career) ? $career->tournament : ''; ?>">
                    <span class="err msgtournament"></span>
                </td>
            </tr>
            <tr>
                <td>Negara <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="country" value="<?php echo ($career) ? $career->country : ''; ?>">
                    <span class="err msgcountry"></span>
                </td>
            </tr>
            <tr>
                <td>Jumlah Main</td>
                <td>
                    <input type="text" name="number_of_play" value="<?php echo ($career) ? $career->number_of_play : ''; ?>">
                    <span class="err msgnumber_of_play"></span>
                </td>
            </tr>
            <tr>
                <td>Nomor Punggung <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="back_number" value="<?php echo ($career) ? $career->back_number : ''; ?>">
                    <span class="err msgback_number"></span>
                </td>
            </tr>
            <tr>
                <td>Pelatih <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="coach" value="<?php echo ($career) ? $career->coach : ''; ?>">
                    <span class="err msgcoach"></span>
                </td>
            </tr>
            <tr>
                <td>Timnas</td>
                <td>
                    <select name="timnas">
                        <option value="">- Pilih -</option>
                        <?php
                        $timnas = array('0' => 'Tidak', '1' => 'Iya');
                        foreach ($timnas as $n => $v) {
                            if ($career AND $n == $career->is_timnas) {
                                echo "<option value='$n' selected>$v</option>";
                            } else {
                                echo "<option value='$n'>$v</option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="err msgtimnas"></span>
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
