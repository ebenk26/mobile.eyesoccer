<?php
    $data['active'] = ($member->id_player > 0) ? 'pemain' : 'klub';
    $this->load->view($folder.'member/header', $data);
?>
<div class="responsif-add-100px">
    <?php
        if ($member->id_club > 0) {
            $data['active'] = 'galeri';
            $this->load->view($folder.'member/club/header', $data);
        }
    ?>
    <div class="container mg-tb15">
        <div id="reqclubalbum" class='loadclubalbum' action="member" loading="off" clean="clsclubalbum">
            <div id='clsclubalbum'>
                <script>
                    $(document).ready(function () {
                        $(window).on('load', function () {
                            ajaxOnLoad('loadclubalbum');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='clubalbum' class='cinput'>
            <div class="x-form-daftar-pemain row">
                <i class="far fa-edit" style="float:right; font-size:.9em;"></i>
                <div class="col-xs-4 edits">
                    <div class="img-round">
                        <img src="<?php echo SUBCDN."assets/img/eyeme/user-discover.png"; ?>" alt="">
                    </div>
                </div>
                <div class="col-xs-8 pd-t-19 edits dftr-pemain">
                    <span>Nama Album</span>
                    <span>Jumlah File</span>
                </div>
            </div>
        </div>
    </div>
</div>