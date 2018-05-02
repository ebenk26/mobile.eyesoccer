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
                            <input type="checkbox" name="agree" id="agree" required="required"><span> saya telah membaca dan menyetujui
                            <a href="">ketentuan dan kebijakan</a> eyesoccer.id</span>
                        </div>
                        <button type="submit">daftar</button>
                     </div>
                </form>
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