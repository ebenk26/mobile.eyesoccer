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
        <div id="reqplayergallery" class='loadplayergallery' action="member" loading="off" clean="clsplayergallery">
            <div id='clsplayergallery'>
                <script>
                    $(document).ready(function () {
                        $(window).on('load', function () {
                            ajaxOnLoad('loadplayergallery');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='playergallery' class='cinput'>
            <input type='hidden' name='uid' value='<?php echo isset($_GET['uid']) ? $_GET['uid'] : ''; ?>' class='cinput'>
            <div class="container mg-b15">
                <div class="pp-profil">
                    <img src="<?php echo SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player">
                </div>
            </div>
            <?php
                if (isset($_GET['uid'])) {
                    $data['active'] = 'galeri';
                    $this->load->view($folder . 'member/player/header', $data);
                }
            ?>
            <div class="pad-lr15 pad-b15">
                <div class="player-galeri">
                    <div class="pad">
                        <span style="background-image: url('<?php echo SUBCDN . "assets/themes/v1/img/a.jpg"; ?>')" class="img"></span>
                    </div>
                </div>
                <div class="player-galeri">
                    <div class="pad">
                        <span style="background-image: url('<?php echo SUBCDN . "assets/themes/v1/img/a.jpg"; ?>')" class="img"></span>
                    </div>
                </div>
                <div class="player-galeri">
                    <div class="pad">
                        <span style="background-image: url('<?php echo SUBCDN . "assets/themes/v1/img/a.jpg"; ?>')" class="img"></span>
                    </div>
                </div>
                <div class="player-galeri">
                    <div class="pad">
                        <span style="background-image: url('<?php echo SUBCDN . "assets/themes/v1/img/a.jpg"; ?>')" class="img"></span>
                    </div>
                </div>
                <div class="player-galeri">
                    <div class="pad">
                        <span style="background-image: url('<?php echo SUBCDN . "assets/themes/v1/img/a.jpg"; ?>')" class="img"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>