<?php $achive = ($achive) ? $achive->data[0] : ''; ?>

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
            $data['active'] = 'penghargaan';
            $this->load->view($folder . 'member/player/header', $data);
        }
    ?>

    <div class="container data-profil">
        <input type="hidden" name="fn" class="cinput" value="playerachiveact">
        <input type="hidden" name="xid" class="cinput" value="<?php echo $uid; ?>">
        <input type="hidden" name="uid" class="cinput" value="<?php echo ($player) ? $player->slug : ''; ?>">
        <input type="hidden" name="act" class="cinput" value="<?php echo ($achive) ? 1 : 0; ?>">
        <input type="hidden" name="id" class="cinput" value="<?php echo ($achive) ? $achive->id_achievement : ''; ?>">
        <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
        <table>
            <tr>
                <td>Tahun <span class="cl-red">*</span></td>
                <td>
                    <input type="number" min="0" name="year" value="<?php echo ($achive) ? $achive->year : date('Y'); ?>">
                    <span class="err msgyear"></span>
                </td>
            </tr>
            <tr>
                <td>Turnament <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="tournament" value="<?php echo ($achive) ? $achive->tournament : ''; ?>">
                    <span class="err msgtournament"></span>
                </td>
            </tr>
            <tr>
                <td>Negara <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="country" value="<?php echo ($achive) ? $achive->country : ''; ?>">
                    <span class="err msgcountry"></span>
                </td>
            </tr>
            <tr>
                <td>Peringkat <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="rank" value="<?php echo ($achive) ? $achive->rank : ''; ?>">
                    <span class="err msgrank"></span>
                </td>
            </tr>
            <tr>
                <td>Penghargaan <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="appreciation" value="<?php echo ($achive) ? $achive->appreciation : ''; ?>">
                    <span class="err msgappreciation"></span>
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
