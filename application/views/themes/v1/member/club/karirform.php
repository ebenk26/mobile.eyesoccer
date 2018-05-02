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
        <div id="reqclubcareerform" class='loadclubcareerform' action="member" loading="off" clean="clsclubcareerform">
            <div id='clsclubcareerform'>
                <script>
                    $(document).ready(function(){
                        $(window).on('load',function(){
                            ajaxOnLoad('loadclubcareerform');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='clubcareerform' class='cinput'>
            <input type='hidden' name='act' value='<?php echo isset($_GET['act']) ? $_GET['act'] : ''; ?>' class='cinput'>
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
                        <td>Turnament</td>
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
                        <td>Pelatih</td>
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