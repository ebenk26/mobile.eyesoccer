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
        <div id="reqplayerachiveform" class='loadplayerachiveform' action="member" loading="off" clean="clsplayerachiveform">
            <div id='clsplayerachiveform'>
                <script>
                    $(document).ready(function(){
                        $(window).on('load',function(){
                            ajaxOnLoad('loadplayerachiveform');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='playerachiveform' class='cinput'>
            <input type='hidden' name='uid' value='<?php echo isset($_GET['uid']) ? $_GET['uid'] : ''; ?>' class='cinput'>
            <input type='hidden' name='act' value='<?php echo isset($_GET['act']) ? $_GET['act'] : ''; ?>' class='cinput'>
            <div class="container mg-b15">
                <div class="pp-profil">
                    <img src="<?php echo SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player">
                </div>
            </div>
            <?php
                if (isset($_GET['uid'])) {
                    $data['active'] = 'penghargaan';
                    $this->load->view($folder . 'member/player/header', $data);
                }
            ?>
            <div class="container data-profil">
                <table>
                    <tr>
                        <td>Tahun</td>
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
                        <td>Peringkat</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Penghargaan</td>
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