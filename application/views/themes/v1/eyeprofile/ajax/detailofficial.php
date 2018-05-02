<?php 
    $model = json_decode($model)->data;
 ?>
<div class="eprofile">
    <div class="head">
    <div class="img-radius">
        <img src="<?= $model->url_pic; ?>" alt="<?= $model->name; ?>/small">
    </div>
    <h2 class="h2-text-bottom"><?= $model->name; ?></h2>
    <div class="table-scroll">
    <table class="content-tab-eprofile">
        <tr>
            <td>klub Sekarang</td>
            <td>: <?= ($model->club != "") ? $model->club : "-"; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>: <?= ($model->birth_place != "") ? $model->birth_place : "-"; ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>: <?= ($model->birth_date != "") ? $model->birth_date : "-"; ?></td>
        </tr>
        <tr>
            <td>Kewarganegaraan</td>
            <td>: <?= ($model->nationality != "") ? $model->nationality : "-"; ?></td>
        </tr>
        <tr>
            <td>Posisi</td>
            <td>: <?= ($model->position != "") ? $model->position : "-"; ?></td>
        </tr>
        <tr>
            <td>Kontrak</td>
            <td>: <?= ($model->contract != "") ? $model->contract : "-"; ?></td>
        </tr>
        <tr>
            <td>Lisensi</td>
            <td>: <?= ($model->license != "") ? $model->license : "-"; ?></td>
        </tr>
    </table>
    </div>
    </div>
    <div class="container table-blue">
        <h3 class="h3-orange">latar belakang</h3>
        <p style="color: gray;font-size: .8em;float: left; visibility: hidden;">lorem ipsum dolor sit amet lo</p>
        <h3 class="h3-orange">formasi (4-3-2-1)</h3>
        <div class="border-box formasi">
            <img src="" alt="">
        </div>
        <h3 class="h3-orange">karir klub</h3>
        <div class="table-scroll-x">
            <table class="table-stripe">
                <tr>
                    <th>#</th>
                    <th>klub</th>
                    <th>bergabung</th>
                    <th>masa kontrak</th>
                    <th>durasi</th>
                    <th>posisi</th>
                    <th>main</th>
                    <th>m</th>
                    <th>s</th>
                    <th>k</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><?= ($model->club != "") ? $model->club : "-"; ?></td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>
	$('#slug_official_detail').html('<?= $model->name; ?>');
</script>