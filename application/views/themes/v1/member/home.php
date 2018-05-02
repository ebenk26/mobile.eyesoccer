<?php
$data['active'] = 'home';
$this->load->view($folder . 'member/header', $data);
$club = (!empty($clubstatus->data) ? $clubstatus->data[0] : "");
$player = (!empty($playerstatus->data) ? $playerstatus->data[0] : "");
?>

<div class="responsif-add-100px">
    <div class="container wlc" id="welcome" style="display:block;">
        <div>
            <img src="<?php echo base_url('assets/img/email/background.png'); ?>" alt="">
        </div>
        <div class="close-wlcm">
            <i class="fas fa-times" onclick="closeFunction()"></i>
        </div>
        <div class="wlcm">
            <span>SELAMAT DATANG</span>
            <span>DI EYESOCCER</span>
            <span>UPDATE DATA PRIBADI KAMU</span>
        </div>
    </div>
    <div class="container daftar-pemain">
        <?php
        if ($club) {
            ?>
            <div class="form-daftar-pemain">
                <div class="pp-profil">
                    <?php $piclogo = (isset($clubpic)) ? explode('.', $clubpic->url_logo) : []; ?>
                    <img src="<?php echo (isset($clubpic) AND isset($piclogo[3])) ? $clubpic->url_logo : SUBCDN . "assets/themes/v1/img/fav.png"; ?>">
                </div>
                <span><?php echo $club->name; ?></span>
                <?php
                if ($club->is_verify == 0 && $club->is_active == 0) {
                    ?>
                    <a href="#">
                        <button class="klik-dsn">Menunggu Verifikasi</button>
                    </a>
                    <?php
                } else if ($club->is_verify == 1 && $club->is_active == 0) {
                    ?>
                    <a href="#">
                        <button class="klik-dsn">Belum di aktivasi</button>
                    </a>
                    <?php
                } else {
                    ?>
                    <a href="<?php echo base_url() ?>member/klub">
                        <button class="klik-dsn">Masuk ke Profil Klub</button>
                    </a>
                    <div class="ff-14 mg-t10">Url Website : <a href="<?php echo base_url("p/$clubpic->slug"); ?>"><?php echo base_url("p/$clubpic->slug"); ?></a></div>
                    <?php
                }
                ?>
            </div>
            <?php
        } else if ($player) {
        } else {
            ?>
            <div class="form-daftar-pemain">
                <span>JIKA KAMU PEMILIK KLUB / SSB</span>
                <span>DAFTARKAN KLUB KAMU</span>
                <a href="<?php echo base_url() ?>member/regis_klub">
                    <button class="klik-dsn">KLIK DISINI</button>
                </a>
            </div>
            <?php
        }
        ?>
        <?php
        if ($player) {
            ?>
            <div class="form-daftar-pemain">
                <div class="pp-profil">
                    <?php $picplayer = (isset($playerpic)) ? explode('.', $playerpic->url_logo) : []; ?>
                    <img src="<?php echo (isset($playerpic) AND isset($picplayer[3])) ? $playerpic->url_logo : SUBCDN . "assets/themes/v1/img/fav.png"; ?>">
                </div>
                <span><?php echo $player->name; ?></span>
                <?php
                if ($player->is_active == 0) {
                    ?>
                    <a href="#">
                        <button class="klik-dsn">Menunggu Verifikasi</button>
                    </a>
                    <?php
                } else {
                    ?>
                    <a href="<?php echo base_url() ?>member/player">
                        <button class="klik-dsn">Masuk ke Profil Pemain</button>
                    </a>
                    <?php
                }
                ?>
            </div>
            <?php
        } else if ($club) {
        } else {
            ?>
            <div class="form-daftar-pemain">
                <span class="fs68">JIKA KAMU PEMAIN SEPAKBOLA</span>
                <span>DAFTARKAN PEMAIN</span>
                <a href="<?php echo base_url() ?>member/regis_player">
                    <button class="klik-dsn">KLIK DISINI</button>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>