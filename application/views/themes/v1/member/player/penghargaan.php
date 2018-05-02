<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder.'member/header', $data);
?>
<div class="responsif-add-100px">
    <?php
        if ($member->id_club > 0) {
            $data['active'] = 'pemain';
            $this->load->view($folder.'member/club/header', $data);
        }
    ?>
    <div class="container mg-tb15">
        <div id="reqplayerachive" class='loadplayerachive' action="member" loading="off" clean="clsplayerachive">
            <div id='clsplayerachive'>
                <script>
                    $(document).ready(function () {
                        $(window).on('load', function () {
                            ajaxOnLoad('loadplayerachive');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='playerachive' class='cinput'>
            <input type='hidden' name='uid' value='<?php echo isset($_GET['uid']) ? $_GET['uid'] : ''; ?>' class='cinput'>
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
            <div class="x-form-daftar-pemain row">
                <i class="far fa-edit" style="float:right; font-size:.9em;"></i>
                <div class="col-xs-12 pd-t-19 edits dftr-pemain">
                    <span>Turnament</span>
                    <span>Tahun</span>
                    <span>Peringkat</span>
                    <span>Penghargaan</span>
                </div>
            </div>
        </div>
    </div>
</div>