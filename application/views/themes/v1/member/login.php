 <div class="container-full">
    <div class="forgot-form login-form">

      
        <?php if($eyeme == 1){

            echo '<h4 style="margin-top:0px">Selamat datang di eyeme</h4>
            <br>
                    <span>Abadikan momen terbaik kamu dan teman - teman mu tentang sepakbola hanya di Eyeme</span>';
        }
        else {
            echo  '<h4 style="margin-top:0px">Selamat datang di eyesoccer.id</h4>
                    <span>semua berita tentang tim favoritmu ada disini</span>';
        }?>
        <div class="btn-option-log">
            <a href="#" id="logBtn" class="active">masuk</a>
            <a href="#" id="regBtn">daftar</a>
        </div>
        <div id='errmsg'></div>
        <div class="login-box">
            <div>                    
                 <form  class='form_basic'>
                    <input type="hidden" name="fn" class="cinput" value="loginact">
                    <span>email</span>
                    <input type="text" name="email" placeholder="ketik alamat email ..." class="cinput">
                    <span class='err msgemail'></span>
                    <span>password</span>
                    <input type="password" name="password" placeholder="password anda" class="cinput">
                    <span class='err msgpassword'></span>
                    <a href="<?php echo base_url('member/forgot'); ?>">lupa password?</a>
                    <button type="submit" class="">masuk</button>
                    <!--  <div class="container atau-menggunakan">
                        <span>atau menggunakan</span>
                        <hr>
                    </div>
                    <div class="container">
                        <a href="" class="btn-log-fb">
                            <div class="log-fb">
                                <img src="assets/img/logo_fb.svg" alt="" srcset="">
                                <span>Facebook</span>
                            </div>
                        </a>
                        <a href="" class="btn-log-g">
                            <div class="log-g">
                                <img src="assets/img/logo_g.svg" alt="" srcset="">
                                <span>Google</span>
                            </div>
                        </a>
                    </div> -->
                </form>
            </div>                
        </div>
        <div class="register-box" class="form">
            <div>
                <form class="form_basic" action="member">
                    <div id="formreg">
                        <input type="hidden" name="fn" value="regact" name="cinput">
                        <span>username</span>
                        <input type="text" name="username"  placeholder="ketik username ..." class="cinput">
                        <span class='err msgusername'></span>
                        <span>nama</span>
                        <input type="text" name="name" placeholder="Ketik Nama Lengkap" class="cinput">
                        <span class='err msgname'></span>
                        
                        <span>email</span>
                        <input type="email" name="email"  placeholder="ketik alamat email ..." class="cinput">
                        <span class='err msgemail'></span>
                        <span>password</span>
                        <input type="password" name="password"  placeholder="password anda" id="pass" class="cinput">
                        <span class='err msgpassword'></span>
                        <span>Konfirmasi Password</span>
                        <input type="password" name="passconfirm" placeholder="konfirmasi password" id="cpass" class="cinput">
                        <span class='err msgpassconfirm'></span>
                        <div class="container input-checkbox">
                            <input type="checkbox" name="agree" id="agree" required="required">
                            <span data-toggle="modal" data-target="#myModal"> saya telah membaca dan menyetujui<a href="#"> ketentuan dan kebijakan</a> eyesoccer.id</span>
                        </div>
                        <button type="submit">daftar</button>
                     </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<div id="myModal" class="modal fade" role="dialog" style="display:  none;position: fixed;width: 100%;max-width: 768px;background-color: #00000099;top: 0px;z-index: 16;height: 100%;padding-top: 10%;padding-right: 5% !important;padding-bottom: 10%;padding-left: 5% !important;box-sizing: border-box;">
  <div class="modal-dialog">
    <div class="modal-content panduan">
      <div class="modal-body" style="background-color: white;padding:  5%;margin:  2%;position: relative;">
      <button type="button" class="close" data-dismiss="modal" style="border:  none;font-size: 1.2em;position:  absolute;right: 5px;top: 5px;color: gray;">&times;</button>
      <h2 style="margin:  unset;font-size:  1.2em;text-align:  center;font-weight: 100;color: #6d6d6d;">Syarat dan Ketentuan Aktifitas</h2>
      <p class="border" style="max-height: 70vh;width: 100%;box-sizing:  border-box;">Berikut adalah hal-hal yang mempengaruhi aktivitas Anda selama mengakses Eyesoccer. Hal-hal dibawah ini dapat menyebabkan komentar, nama akun, nama user, foto profil, dan bio yang Anda buat kami hapus bahkan hingga menyebabkan akun Anda kami nonaktifkan. Kami memiliki hak untuk menghapus atau melakukan suspen terhadap pelanggaran seperti yang telah ditulis pada Ketentuan dan Kebijakan Privasi<br><br>
					Spam : Kami akan melakukan peninjauan terlebih dahulu terhadap komentar yang bersifat Spam. Hal ini termasuk dalam cakupan mempromosikan diri sendiri, produk, judi, konten kekerasan. Penyerangan pribadi : Pengguna diharapkan tidak menyerang atau melakukan penghinaan terhadap pengguna lainnya. Hal ini akan membantu Eyesoccer untuk menjadi tempat yang lebih nyaman bagi komunitas. Aktivitas ilegal : Membagikan tautan ke arah pengunduhan tidak resmi, cara untuk melakukan pencurian terhadap layanan tertentu atau aktivitas negatif lainnya tidak diperkenankan untuk dilakukan di Eyesoccer.<br><br>
					Materi NSFW : Anda tidak diperkenankan untuk melakukan publikasi materi NSFW (Not Safe For Work). Yang termasuk diantaranya adalah materi pornografi, perjudian, kekerasan, dan konten yang atas barang dan jasa melanggar peraturan perundang-undangan. Pembahasan SARA : Pembahasan SARA tidak diperkenankan di Eyesoccer. Pelanggaran akan mendapatkan peringatan dari kami. Trolling : Trolling merupakan istilah yang digunakan untuk memancing emosi orang lain dengan menggunakan konteks yang tidak saling berkaitan. Jika trolling dilakukan pada aktivitas yang ada di Eyesoccer, maka kami akan menarik story atau komentar pengguna.<br><br>
					Pengguna Email Berbeda Untuk Tujuan Negatif : Eyesoccer tidak menyetujui penggunaan akun banyak bagi satu orang pengguna. Dengan penggunaan email yang tidak benar, mengindikasi bahwa Anda berniat untuk melakukan sesuatu dengan alasan yang tidak benar di Eyesoccer. Anda juga tidak diperbolehkan membuat akun untuk melakukan pemalsuan story atau komentar berulang kali di lokasi yang berbeda didalam Eyesoccer. Keluhan Terhadap Jangkauan Pemberitaan : Eyesoccer bersama para pengguna melakukan pembuatan story dan melakukan pemberitaan dengan topik yang begitu luas dan seragam. Tidak seluruhnya pembuatan story serta pemberitaan tersebut merefleksikan atau dapat mewakili pandangan pribadi Anda. Kami tidak mendiskusikan mengenai jangkauan pemberitaan yang kami lakukan.<br><br>
					Terlepas dari semua itu, tim komunitas kami berusaha untuk menjaga percakapan tetap kondusif, bersahabat, interaktif, informatif, dan produktif. Jika kami merasa bahwa ada hal-hal yang dapat mengganggu kenyamanan berinteraksi di Eyesoccer, kami akan melakukan tindakan yang sesuai. Jika Anda melihat apa yang telah kami sebutkan diatas, Anda juga dapat membantu Eyesoccer untuk menciptakan situasi komunitas yang nyaman dengan memanfaatkan tombol Report yang selalu ada pada setiap berita atau video.</p>
      </div>
    </div>

  </div>
</div>
    <div class="modal fadeinDown in" id="snk" role="dialog" style="display: none;">
        <div class="modal-dialog" style="left: 50%;top: 50%;transform: translate(-50%, -50%);margin: unset;max-width: 300px;">
            <div class="box-popup">
                <button style="padding: 0px;border:  none;font-size:  2em;opacity:  .3;position:  relative;float:  right;top:  -10px;right:  7px;" type="button" class="close" data-dismiss="modal" onclick="sesPop()">× </button>
                <!-- <h3 style="font-size: 1.5em;margin:  0px;padding:  0px;text-align:  center;font-weight: 300;color:  #333;font-family: sans-serif;">Ayo Sukseskan!</h3> -->
                <img style="width:  100%;box-sizing:  border-box;padding: 20px;" src="https://static.eyesoccer.id/v1/cache/images/rev-pop-up-mobile.jpg" alt="">
            </div>
        </div>
    </div>

    <script>
        //var document.getElementByClassName('')
        $(function(){
            //console.log('test');
           $('#logBtn').click(function(){
           // alert('test');
                $('.login-box').css('display','block');
                $('.register-box').css('display','none');
                $('#logBtn').addClass('active');
                $('#regBtn').removeClass('active');
           });
           $('#regBtn').click(function(){
                $('.register-box').css('display','block');
                $('.login-box').css('display','none');
                $('#regBtn').addClass('active');
                $('#logBtn').removeClass('active');
           });

        })
    </script>