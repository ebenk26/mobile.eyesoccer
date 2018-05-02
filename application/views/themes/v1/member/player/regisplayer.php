<?php
    $data['active'] = 'home';
    $this->load->view($folder . 'member/header', $data);
?>
<div class="responsif-add-100px">
    <form class='form_multi' action="<?= base_url('member'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="fn" class="cinput" value="regplayer">
        <div class="container data-profil">
            <h2 style="text-align: center;font-weight: 400;">Registrasi Pemain</h2>
            <div class="ff-12 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
            <table>
                <?php if ($club == ''): ?>
                    <tr>
                        <td>Klub <span class="cl-red">*</span></td>
                        <td>
                            <input type="text" id="club" name="club" placeholder="Input disini untuk mencari klub" class="form_keyup" action="member" fn="listclub" wait loading="off">
                            <input type="hidden" name="slug" id="slug">
                            <span class="err msgclub"></span>
                            <div id='showclub'></div>
                        </td>
                    </tr>
                <?php else: ?>
                    <input type="hidden" name="slug" id="slug" value="<?= $club; ?>">
                <?php endif ?>
                <tr>
                    <td>Nama <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="name">
                        <span class="err msgname"></span>
                    </td>
                </tr>
                <tr>
                    <td>No. Kartu Keluarga <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="no_kk">
                        <span class="err msgno_kk"></span>
                    </td>
                </tr>
                <tr>
                    <td>Kartu Keluarga <span class="cl-red">*</span></td>
                    <td>
                        <input type="file" name="file_kk">
                        <span class="err msgfile_kk"></span>
                    </td>
                </tr>
                <tr>
                    <td>No. KTP / NIK / No. Kartu Pelajar <span class="cl-red">*</span></td>
                    <td>
                        <input type="number" name="no_ktp">
                        <span class="err msgno_ktp"></span>
                    </td>
                </tr>
                <tr>
                    <td>KTP (Jika sudah punya)</td>
                    <td>
                        <input type="file" name="file_ktp">
                        <span class="err msgfile_ktp"></span>
                    </td>
                </tr>
                <tr>
                    <td>Akte Kelahiran</td>
                    <td>
                        <input type="file" name="file_akte">
                        <span class="err msgfile_akte"></span>
                    </td>
                </tr>
                <tr>
                    <td>Ijazah</td>
                    <td>
                        <input type="file" name="file_ijazah">
                        <span class="err msgfile_ijazah"></span>
                    </td>
                </tr>
                <tr>
                    <td>Passport</td>
                    <td>
                        <input type="file" name="file_passport">
                        <span class="err msgfile_passport"></span>
                    </td>
                </tr>
                <tr>
                    <td>Buku Rekening</td>
                    <td>
                        <input type="file" name="file_bukurek">
                        <span class="err msgfile_bukurek"></span>
                    </td>
                </tr>
                <tr>
                    <td>KTP Ibu Kandung</td>
                    <td>
                        <input type="file" name="file_ibukandung">
                        <span class="err msgfile_ibukandung"></span>
                    </td>
                </tr>
                <tr>
                    <td>Surat Rekening SSB</td>
                    <td>
                        <input type="file" name="file_srtrekssb">
                        <span class="err msgfile_srtrekssb"></span>
                    </td>
                </tr>
            </table>

            <script type="text/javascript">
                function select_club(elem) {
                    var slug = $(elem).attr('slug');
                    var club = $(elem).attr('club');

                    $('#club').val(club);
                    $('#slug').val(slug);
                    $('#showclub').attr('style', 'display:none');
                }
            </script>
        </div>
        <div class="tx-c">
            <input type="submit" value="Simpan" class="klik-dsn" style="font-size:.85em;">
        </div>
    </form>
</div>