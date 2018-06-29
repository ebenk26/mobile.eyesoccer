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
    <div id="reqclubuploadform" class='loadclubuploadform' action="member" loading="off" clean="clsclubuploadform">
        <div id='clsclubuploadform'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadclubuploadform');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='clubuploadform' class='cinput'>
        <input type='hidden' name='view' value='<?php echo isset($_GET['view']) ? $_GET['view'] : ''; ?>' class='cinput'>
        <input type='hidden' name='tab' value='<?php echo isset($_GET['tab']) ? $_GET['tab'] : ''; ?>' class='cinput'>
        <input type='hidden' name='act' value='<?php echo isset($_GET['act']) ? $_GET['act'] : ''; ?>' class='cinput'>
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