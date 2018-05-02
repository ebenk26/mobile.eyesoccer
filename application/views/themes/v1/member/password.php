<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder . 'member/header', $data);
?>

<div class="responsif-add-100px">
    <?php
        $data['active'] = 'password';
        $this->load->view($folder.'member/widget/header', $data);
    ?>
    <div class="container mg-tb15">
        <form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
            <input type='hidden' name='fn' value='password' class='cinput'>
            <div class="container data-profil">
                <table>
                    <tr>
                        <td>Password Lama</td>
                        <td>
                            <input type="password" name="oldpass">
                        </td>
                    </tr>
                    <tr>
                        <td>Password Baru</td>
                        <td>
                            <input type="password" name="newpass">
                        </td>
                    </tr>
                    <tr>
                        <td>Konfirmasi Password</td>
                        <td>
                            <input type="password" name="confirmpass">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tx-c">
                            <button class="klik-dsn">Simpan</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>