 <div class="container" style="margin-top: 50px;margin-bottom: 50px;" xhide="true">
    <div id="reqimg" class='loadimg' action="eyeme" loading="off">
         <input type="hidden" name="fn" value="meimg" class="cinput">
         <input type="hidden" name="uid" value="<?php echo $this->uri->segment(3)?>" class="cinput">
         <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadimg');
                });

            });
     
        </script>
       
       <div class="container">
            <div class="container emepost">
                <a href="">
                <div class="img-usr">
                    <div style="background: #f3f3f3;height: 20px;width: 20px;border-radius: 50%;">
                    </div>
                </div>
                <span class="gr">username</span>
                </a>
                <i class="material-icons more display-box-notif" style="color: #f3f3f3;">more_horiz</i>
            </div>
            <div class="eme-img-content">
                <div style="background: #f3f3f3;height:300px;width: 400px;margin-top:50px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- KOMENTAR -->

