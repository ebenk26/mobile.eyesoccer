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
                <div class="container mt20">
                    <div class="pp-profil">
                        <img src="<?php echo SUBCDN; ?>assets/themes/v1/img/fav.png" alt="">
                    </div>
                </div>
                <div class="container data-profil mt20">
                    <table>
                        <tr>
                            <td colspan="2" class="tx-c">
                                <button class="klik-dsn">Loading...</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>