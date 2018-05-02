<script>
    /*$(document).ready(function () {
        $('#' + xid).datetimepicker({
            format: 'd-m-Y',
            timepicker: false,
            closeOnDateSelect: true,
        });
    });*/
</script>

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
    <div id="reqplayerinfo" class='loadplayerinfo' action="member" loading="off" clean="clsplayerinfo">
        <div id='clsplayerinfo'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadplayerinfo');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='playerinfo' class='cinput'>
        <input type='hidden' name='uid' value='<?php echo isset($_GET['uid']) ? $_GET['uid'] : ''; ?>' class='cinput'>
        <div class="container mg-tb15">
            <div class="pp-profil">
                <img src="<?php echo SUBCDN . "assets/themes/v1/img/fav.png"; ?>" alt="Player">
            </div>
        </div>
        <?php
            if (isset($_GET['uid'])) {
                $data['active'] = 'profil';
                $this->load->view($folder . 'member/player/header', $data);
            }
        ?>
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
                    <td>Deskripsi</td>
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
                    <td>Telepon</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>No. Hp</td>
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
                    <td>Tinggi</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
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
                    <td>Posisi Utama</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Posisi Cadangan</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nomor Punggung</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Kemampuan Kaki</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Favorit Klub</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Favorit Pemain</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Favorit Pelatih</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Kisaran Gaji</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nama Bapak</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <td>
                        Foto Pemain
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