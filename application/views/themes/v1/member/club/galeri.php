<?php
$data['active'] = 'klub';
$this->load->view($folder . 'member/header', $data);
?>
<div class="responsif-add-100px">
    <?php
    $data['active'] = 'galeri';
    $this->load->view($folder . 'member/club/header', $data);
    ?>
    <!-- galeri -->
    <div class="container">
        <div class="container form-profil-dash pd20" id="form-galeri">
            <div id="reqgaleri" class='loadgaleri' action="member" loading="off" clean="clsgaleri">
                <div id='clsgaleri'>
                    <script>
                        $(document).ready(function () {
                            $(window).on('load', function () {
                                ajaxOnLoad('loadgaleri');
                            });
                        });
                    </script>
                </div>
                <input type='hidden' name='fn' value='galeri' class='cinput'>
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