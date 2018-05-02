<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder.'member/header', $data);
?>
<div class="responsif-add-100px">
    <?php
        if ($member->id_club > 0) {
            $data['active'] = 'karir';
            $this->load->view($folder.'member/club/header', $data);
        }
    ?>
    <div class="container mg-tb15 tx-r">
        <div id="reqclubcareer" class='loadclubcareer' action="member" loading="off" clean="clsclubcareer">
            <div id='clsclubcareer'>
                <script>
                    $(document).ready(function () {
                        $(window).on('load', function () {
                            ajaxOnLoad('loadclubcareer');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='clubcareer' class='cinput'>
            <input type='hidden' name='uid' value='<?php echo isset($_GET['uid']) ? $_GET['uid'] : ''; ?>' class='cinput'>
            <div class="x-form-daftar-pemain row">
                <i class="far fa-edit" style="float:right; font-size:.9em;"></i>
                <div class="col-xs-12 pd-t-19 edits dftr-pemain">
                    <span>Turnament</span>
                    <span>Bulan</span>
                    <span>Tahun</span>
                    <span>Peringkat</span>
                    <span>Pelatih</span>
                </div>
            </div>
        </div>
    </div>
</div>