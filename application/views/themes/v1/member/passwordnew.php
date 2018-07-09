 <div class="container-full">
    <div class="forgot-form login-form">
     <h4 style="margin-top:0px">Ubah Password</h4>
     
        <div class="login-box" style="margin-top:20px">
            <div>                    
                 <form  class='form_basic'>
                    <input type="hidden" name="fn" class="cinput" value="passact">
                    <input type="hidden" name="ver" class="cinput" value="<?php echo (isset($_GET['ver'])) ? $_GET['ver'] : ''; ?>">
                    <span>Password</span>
                    <input type="password" name="pass" class="cinput">
                    <span>Konfirm Password</span>
                    <input type="password" name="passconfirm" class="cinput">
                    <button type="submit" class="">Kirim</button>
                </form>
            </div>                
        </div>
       
    </div>

   