<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder . 'member/header', $data);
?>

<div class="responsif-add-100px">
    <?php
    if ($member->id_club > 0) {
        $data['active'] = 'pemain';
        $this->load->view($folder.'member/club/header', $data);
    }
    ?>
    <div class="container mg-tb15">
        <div id="reqplayerkarirform" class='loadplayerkarirform' action="member" loading="off" clean="clsplayerkarirform">
            <div id='clsplayerkarirform'>
                <script>
                    $(document).ready(function(){
                        $(window).on('load',function(){
                            ajaxOnLoad('loadplayerkarirform');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='playerkarirform' class='cinput'>
            <input type='hidden' name='uid' value='<?php echo isset($_GET['uid']) ? $_GET['uid'] : ''; ?>' class='cinput'>
            <input type='hidden' name='act' value='<?php echo isset($_GET['act']) ? $_GET['act'] : ''; ?>' class='cinput'>
            <div class="container mg-b15">
                <div class="pp-profil">
                    <img src="<?php echo SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player">
                </div>
            </div>
            <?php
                if (isset($_GET['uid'])) {
                    $data['active'] = 'karir';
                    $this->load->view($folder . 'member/player/header', $data);
                }
            ?>
            <div class="container data-profil">
                <table>
                    <tr>
                        <td>Bulan</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Klub</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Turnament</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Negara</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Main</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Punggung</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Pelatih</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Timnas</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tx-c">
                            <button class="klik-dsn">Simpan</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>