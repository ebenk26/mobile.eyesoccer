<?php foreach ($verify as $ver): ?>

    <div class="x-form-daftar-pemain row">
        <div class="col-xs-4 edits">
            <div class="img-round">
                <img src="<?php echo $ver->url_photo; ?>" alt="">
            </div>
        </div>
        <div class="col-xs-8 pd-t-19 edits dftr-pemain">
            <span><?= $ver->name; ?></span>
            <span>No. KK : <?= $ver->no_kk; ?></span>
            <span>No. Identitas : <?= $ver->no_ktp; ?></span>
            <span>Registrasi : <?= date('d M Y', strtotime($ver->date_create)); ?></span>
        </div>
    </div>

    <div class="x-form-daftar-pemain row">
        <!--<table>
            <tr>
                <td style="width: 150px">Nama</td>
                <td>: <?/*= $ver->name; */?></td>
            </tr>
            <tr>
                <td>No. KK
                </th>
                <td>: <?/*= ($ver->no_kk == "") ? '-' : $ver->no_kk; */?></td>
            </tr>
            <tr>
                <td>No. Ktp
                </th>
                <td>: <?/*= ($ver->no_ktp == "") ? '-' : $ver->no_ktp; */?></td>
            </tr>
            <tr>
                <td>Registrasi
                </th>
                <td>: <?/*= date('d M Y', strtotime($ver->date_create)); */?></td>
            </tr>
        </table>-->
        <p class="semibold-grey">Lampiran</p>
        <div class="container over-x">
            <table class="w-max tabel-lampiran">
                <tr>
                    <td>
                        <?php if ($ver->url_kk != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_kk; ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_ktp != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_ktp; ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_akte != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_akte; ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td><?php if ($ver->url_ijazah != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_ijazah; ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_passport != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_passport; ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_bukurek != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_bukurek; ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_ibukandung != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_ibukandung; ?>" alt="">
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_srtrekssb != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            <img src="<?= $ver->url_srtrekssb; ?>" alt="">
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php if ($ver->url_kk != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            Kartu Keluarga
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_ktp != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            KTP
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_akte != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            Akte Kelahiran
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_ijazah != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            Ijazah
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_passport != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            Passport
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_bukurek != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            Buku Rekening
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_ibukandung != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            KTP Ibu Kandung
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if ($ver->url_srtrekssb != "http://static.eyesoccer.id/v1/cache/images/"): ?>
                            Surat Rekening SSB
                        <?php endif ?>
                    </td>
                </tr>
            </table>
        </div>
        <a href="javascript:void(0)" id="approve_<?php echo $ver->id; ?>" class="form_post" action="member" fn="verifyapp"
           confirm="Apakah anda yakin menerima pendaftar ini?">
            <span class="klik-dsn m-0"> Approve </span>
            <input type="hidden" name="id_reg" value="<?php echo $ver->id; ?>" class="cinput">
            <input type="hidden" name="name" value="<?php echo $ver->name; ?>" class="cinput">
        </a>
    </div>

    <?php if (count($ver->players) > 0): ?>
        <div class="x-form-daftar-pemain row">
            <p class="semibold-grey">Pemain Dengan Nama yang Sama</p>
            <?php foreach ($ver->players as $pl): ?>
                <table>
                    <tr>
                        <td style="width: 150px">Nama</td>
                        <td>: <?= $pl->name; ?></td>
                    </tr>
                    <tr>
                        <td>Club</td>
                        <td>: <?= $pl->club; ?></td>
                    </tr>
                    <tr>
                        <td>Kewarganegaraan</td>
                        <td>: <?= $pl->nationality; ?></td>
                    </tr>
                    <tr>
                        <td>Aktif</td>
                        <td>: <?= ($pl->is_active > 0) ? 'Iya' : 'Tidak' ; ?></td>
                    </tr>
                </table>
                <a href="javascript:void(0)" id="approve_<?php echo $pl->id; ?>" class="form_post" action="member" fn="verifyapp"
                   confirm="Apakah anda yakin menerima pendaftar ini?">
                    <span class="klik-dsn m-0"> Approve </span>
                    <input type="hidden" name="id_play" value="<?php echo $pl->id; ?>" class="cinput">
                    <input type="hidden" name="id_reg" value="<?php echo $ver->id; ?>" class="cinput">
                    <input type="hidden" name="name" value="<?php echo $ver->name; ?>" class="cinput">
                </a>
            <?php endforeach ?>
        </div>
    <?php endif ?>


<?php endforeach ?>
