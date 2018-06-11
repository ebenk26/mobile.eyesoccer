<?php
    $data['active'] = 'home';
    $this->load->view($folder.'member/header', $data);
?>
<div class="responsif-add-100px">
    <form class='form_multi' action="<?= base_url('member'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="fn" class="cinput" value="regclub">
        <div class="container data-profil">
            <h2>Registrasi Klub / SSB</h2>
            <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
            <table>
                <tr>
                    <td>Nama Klub / SSB / Akademi <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="name">
                        <span class="err msgname"></span>
                    </td>
                </tr>
                <tr>
                    <td>Julukan <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="namealias">
                        <span class="err msgnamealias"></span>
                    </td>
                </tr>
                <tr>
                    <td>Alamat <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="address">
                        <span class="err msgaddress"></span>
                    </td>
                </tr>
                <tr>
                    <td>Telepon <span class="cl-red">*</span></td>
                    <td>
                        <input type="number" name="phone">
                        <span class="err msgphone"></span>
                    </td>
                </tr>
				<tr>
                    <td>Nama Penanggung Jawab <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="namecharge">
                        <span class="err msgnamecharge"></span>
                    </td>
                </tr>
				<tr>
                    <td>Identitas Penanggung Jawab (KTP / SIM / Passport) <span class="cl-red">*</span></td>
                    <td>
                        <input type="file" name="legal_charge">
                        <span class="err msglegal_charge"></span>
                    </td>
                </tr>
				<tr>
                    <td>Alamat Latihan <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="training_address">
                        <span class="err msgtraining_address"></span>
                    </td>
                </tr>
				<tr>
                    <td>Jadwal Latihan <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="training_schedule">
                        <span class="err msgtraining_schedule"></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas PT / Yayasan / Koperasi<span class="cl-red">*</span></td>
                    <td>
                        <input type="file" name="legal_pt">
                        <span class="err msglegal_pt"></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas Kemenham</td>
                    <td>
                        <input type="file" name="legal_kemenham">
                        <span class="err msglegal_kemenham"></span>
                    </td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td>
                        <input type="file" name="legal_npwp">
                        <span class="err msglegal_npwp"></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas Dirut</td>
                    <td>
                        <input type="file" name="legal_dirut">
                        <span class="err msglegal_dirut"></span>
                    </td>
                </tr>
            </table>
        </div>
        <div class="tx-c">
            <input type="submit" value="Simpan" class="klik-dsn" style="font-size:.85em;">
        </div>
    </form>
</div>
