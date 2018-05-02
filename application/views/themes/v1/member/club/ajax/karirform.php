<?php $career = ($career) ? $career->data[0] : ''; ?>

<form class='form_multi' action="<?php echo base_url('member'); ?>" enctype="multipart/form-data">
    <div class="container data-profil">
        <input type="hidden" name="fn" class="cinput" value="clubcareeract">
        <input type="hidden" name="act" class="cinput" value="<?php echo ($career) ? 1 : 0; ?>">
        <input type="hidden" name="id" class="cinput" value="<?php echo ($career) ? $career->id_career : ''; ?>">
        <div class="ff-12 mg-t5 mg-b15" style="font-weight:bold"><span class="cl-red">*</span> harus diisi</div>
        <table>
            <tr>
                <td>Bulan <span class="cl-red">*</span></td>
                <td>
                    <select name="month" class="tx-cp">
                        <?php
                        foreach ($this->library->monthDate() as $m) {
                            $m = $this->library->monthFixed($m);
                            if ($career AND $career->month == $m) {
                                echo "<option value='$m' selected>$m</option>";
                            } else {
                                echo "<option value='$m'>$m</option>";
                            }
                        }
                        ?>
                    </select>
                    <span class="err msgmonth"></span>
                </td>
            </tr>
            <tr>
                <td>Tahun <span class="cl-red">*</span></td>
                <td>
                    <input type="number" min="0" name="year" value="<?php echo ($career) ? $career->year : date('Y'); ?>">
                    <span class="err msgyear"></span>
                </td>
            </tr>
            <tr>
                <td>Turnament <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="tournament" value="<?php echo ($career) ? $career->tournament : ''; ?>">
                    <span class="err msgtournament"></span>
                </td>
            </tr>
            <tr>
                <td>Peringkat <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="rank" value="<?php echo ($career) ? $career->rank : ''; ?>">
                    <span class="err msgrank"></span>
                </td>
            </tr>
            <tr>
                <td>Pelatih <span class="cl-red">*</span></td>
                <td>
                    <input type="text" name="coach" value="<?php echo ($career) ? $career->coach : ''; ?>">
                    <span class="err msgcoach"></span>
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
