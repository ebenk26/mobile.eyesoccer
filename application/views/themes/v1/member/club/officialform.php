<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder . 'member/header', $data);
?>

<div class="responsif-add-100px">
    <?php
    if ($member->id_club > 0) {
        $data['active'] = 'ofisial';
        $this->load->view($folder.'member/club/header', $data);
    }
    ?>
    <div class="container mg-tb15">
        <div id="reqclubofficialform" class='loadclubofficialform' action="member" loading="off" clean="clsclubofficialform">
            <div id='clsclubofficialform'>
                <script>
                    $(document).ready(function(){
                        $(window).on('load',function(){
                            ajaxOnLoad('loadclubofficialform');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='clubofficialform' class='cinput'>
            <input type='hidden' name='act' value='<?php echo isset($_GET['act']) ? $_GET['act'] : ''; ?>' class='cinput'>
            <div class="container mg-b15">
                <div class="pp-profil">
                    <img src="<?php echo SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Ofisial" class="viewimg">
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
                        <td>Posisi</td>
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
                        <td>Lisensi</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>No Identitas</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
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
                        <td>Email</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Kontak</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>Kontrak</td>
                        <td>
                            <input type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Foto
                        </td>
                        <td>
                            <div class="up-foto">
                                <i class="fas fa-plus-circle"></i>
                            </div>
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