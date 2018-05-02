<?php echo set_breadcrumb("eyetube",$slug); ?>

<!-- EYETUBE -->
<div id="reqtube" class='loadtube' action="eyetube" loading="off" clean="clstube">
    <div id='clstube'>
        <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadtube');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='category_tube' class='cinput'>
    <input type='hidden' name='category' value='<?= $category_name; ?>' class='cinput'>
    <div class="etube-home">
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;">2 jam lalu - 123 view</span>
            </div>
        </a>
    </div>
</div>
<!-- <div class="menu-bottom-etube">
    <i class="material-icons">home</i>
    <i class="material-icons">grade</i>
    <i class="material-icons">grade</i>
    <i class="material-icons">grade</i>
</div> -->
<div class="box-notif">
    <div class="box-notif-content">
        <a href="">Tambahkan ke</a>
        <a href="">Laporkan</a>
    </div>
</div>