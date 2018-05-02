<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder . 'member/header', $data);
?>

<div class="responsif-add-100px">
    <?php
        $data['active'] = 'profil';
        $this->load->view($folder.'member/widget/header', $data);
    ?>
    <div class="container mg-tb15">
        <div id="reqprofile" class='loadprofile' action="member" loading="off" clean="clsprofile">
            <div id='clsprofile'>
                <script>
                    $(document).ready(function(){
                        $(window).on('load',function(){
                            ajaxOnLoad('loadprofile');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='profile' class='cinput'>
            <div class="container mg-b15">
                <div class="pp-profil">
                    <img src="<?php echo SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player">
                </div>
            </div>
            <div class="container data-profil">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Tentang Saya</td>
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