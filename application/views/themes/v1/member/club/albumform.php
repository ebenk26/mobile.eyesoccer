<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder . 'member/header', $data);
?>

<div class="responsif-add-100px">
    <?php
    if ($member->id_club > 0) {
        $data['active'] = 'galeri';
        $this->load->view($folder.'member/club/header', $data);
    }
    ?>
    <div id="reqclubalbumform" class='loadclubalbumform' action="member" loading="off" clean="clsclubalbumform">
        <div id='clsclubalbumform'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadclubalbumform');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='clubalbumform' class='cinput'>
        <input type='hidden' name='act' value='<?php echo isset($_GET['act']) ? $_GET['act'] : ''; ?>' class='cinput'>
        <div class="container mt20">
            <div class="pp-profil">
                <img src="<?php echo SUBCDN; ?>assets/themes/v1/img/fav.png" alt="">
            </div>
        </div>
        <div class="container data-profil mt20">
            <table>
                <tr>
                    <td>Nama Album</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Informasi</td>
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