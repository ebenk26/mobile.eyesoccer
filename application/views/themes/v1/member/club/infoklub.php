<?php
    $data['active'] = 'klub';
    $this->load->view($folder . 'member/header', $data);
?>
<div class="responsif-add-100px">
    <?php
        $data['active'] = 'klub';
        $this->load->view($folder . 'member/club/header', $data);
    ?>
    <div id="reqinfoklub" class='loadinfoklub' action="member" loading="off" clean="clsinfoklub">
        <div id='clsinfoklub'>
            <script>
                $(document).ready(function () {
                    $(window).on('load', function () {
                        ajaxOnLoad('loadinfoklub');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='infoklub' class='cinput'>
        <div class="container mt20">
            <div class="pp-profil">
                <img src="<?php echo SUBCDN; ?>assets/themes/v1/img/fav.png" alt="Logo Klub">
            </div>
        </div>
        <div class="container data-profil mt20">
            <table>
                <tr>
                    <td>Nama Klub</td>
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
                    <td>Deskripsi Klub</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal didirikan</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>No. Telp</td>
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
                    <td>Alamat Klub</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nama Pelatih</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nama Manager</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nama Supporter</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nama Pemilik</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Jadwal Latihan</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Legalitas Perusahaan
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