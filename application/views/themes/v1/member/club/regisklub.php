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
                    <td>Nama Klub <span class="cl-red">*</span></td>
                    <td>
                        <input type="text" name="name">
                        <span class="err msgname"></span>
                    </td>
                </tr>
                <tr>
                    <td>Nama Alias <span class="cl-red">*</span></td>
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
                        <input type="text" name="phone">
                        <span class="err msgphone"></span>
                    </td>
                </tr>
                <tr>
                    <td>Legalitas PT / Identitas Pemilik <span class="cl-red">*</span></td>
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
<!-- INBOX NOTIFICATION -->
<div class="container dash-notif" id="notifInbox" style="display: none;">
    <div class="panah-notif"></div>
    <div class="title-notif">
        <span class="container">Kotak Masuk</span>
    </div>
    <div class="notific">
        <a href="" class="container inbox-dashboard">
            <div class="container img-inbox-dashboard">
        <<<<<<< HEAD
                <img src="<?php echo SUBCDN ?>assets/img/eyeme/user-discover.png" alt="">
        =======
                <img src="<?php echo base_url();?>assets/img/eyeme/user-discover.png" alt="">
        >>>>>>> cc23407462a12b40cd5a8b770a60707f3724e26b
            </div>
            <div class="text-inbox">
                <span class="time">12:15</span>
                <span class="sender">eyesoccer</span>
                <span class="title">ayo update data kamu ...</span>
                <span class="preview">Hallo Dila, ayo update data kamu...</span>
            </div>
            <div class="bb2g"></div>
        </a>
        <!-- <a href="" class="container inbox-dashboard">
            <div class="container img-inbox-dashboard">
                <img src="http://localhost/mob.eyesoccer.id/assets/img/eyeme/user-discover.png" alt="">
            </div>
            <div class="text-inbox">
                <span class="time">12:15</span>
                <span class="sender">eyesoccer</span>
                <span class="title">ayo update data kamu ...</span>
                <span class="preview">Hallo Dila, ayo update data kamu...</span>
            </div>
            <div class="bb2g"></div>
        </a> -->
    </div>
</div>

<!-- NOTIFICATION -->
<!-- <div class="container dash-notif" id="notifications" style="display: none;">
    <div class="panah-notif2"></div>
    <div class="title-notif">
        <span class="container">Notifikasi</span>
    </div>
    <div class="notific">
        <a href="" class="container inbox-dashboard">
            <div class="container img-inbox-dashboard">
    <<<<<<< HEAD
                <img src="<?php echo SUBCDN ?>assets/img/eyeme/user-discover.png" alt="">
    =======
                <img src="<?php echo base_url();?>assets/img/eyeme/user-discover.png" alt="">
    >>>>>>> cc23407462a12b40cd5a8b770a60707f3724e26b
            </div>
            <div class="text-inbox2">
                <span>Rika Aulia</span>
                <span>melihat profil kamu</span>
            </div>
            <div class="bb2g"></div>
        </a>
        <a href="" class="container inbox-dashboard">
            <div class="container img-inbox-dashboard">
                <img src="http://localhost/mob.eyesoccer.id/assets/img/eyeme/user-discover.png" alt="">
            </div>
            <div class="text-inbox2">
                <span>Rika Aulia</span>
                <span>melihat profil kamu</span>
            </div>
            <div class="bb2g"></div>
        </a>
    </div>
</div> -->

<script>
    function myFunction() {
        var x = document.getElementById("menuDashboard");
        if (x.style.display == "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function closeFunction() {
        var y = document.getElementById("welcome");
        if (y.style.display == "block") {
            y.style.display = "none";
        }
    }
    function functionNotifInbox() {
        var y = document.getElementById("notifInbox");
        var p = document.getElementById("isiContent");
        var q = document.getElementById("signNotifInbox");
        var a = document.getElementById("notifications");
        if (y.style.display == "none") {
            y.style.display = "block";
            q.style.display = "none";
            p.style.filter = "blur(20px)";
            a.style.display = "none";
            
        } else {
            y.style.display = "none";
            p.style.filter = "unset";
        }
    }
    function functionNotification() {
        var a = document.getElementById("notifications");
        var b = document.getElementById("isiContent");
        var c = document.getElementById("signNotification");
        var y = document.getElementById("notifInbox");
        if (a.style.display == "none") {
            a.style.display = "block";
            c.style.display = "none";
            b.style.filter = "blur(20px)";
            y.style.display = "none";
        } else {
            a.style.display = "none";
            b.style.filter = "unset";
        }
    }
</script>
