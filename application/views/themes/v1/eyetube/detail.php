
<!-- EYETUBE -->
<div class="container eyetube" style="margin-top:47px;">
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
        <input type='hidden' name='fn' value='detail_tube' class='cinput'>
        <input type='hidden' name='slug' value='<?= $slug; ?>' class='cinput'>
        <video width="100%" height="" controls></video>
        <div class="etube-v-title-mobile fafa">
            <h1 style="visibility: hidden;"class="gr">Lorrem Ipsum solor sit amet</h1><i class="heightControl2 material-icons arrow-right-etube" style="visibility: hidden;">arrow_drop_up</i><i class="material-icons arrow-right-etube heightControl" style="visibility: hidden;">arrow_drop_down</i>
            <span style="visibility: hidden;">30 menit lalu - oleh Rendy - 300 kali diputar</span>
            <div class="container deskripsi gr">
                <p style="visibility: hidden;">Deskripsi Lorrem Ipsum solor sit amet Lorrem Ipsum solor sit amet Lorrem Ipsum solor sit amet</p>
            </div>
            <div class="container ">
                
            </div>
            <div class="tx-c etube-share fafa">
                <!-- <i class="fa fa-heart-o heart-first" aria-hidden="true"> 23</i> -->
                <i class="fas fa-heart heart-first" aria-hidden="true" style="visibility: hidden;"><span>3</span></i>
                <i class="far fa-comment openComment" aria-hidden="true" style="visibility: hidden;"><span>333</span></i>
                <i class="far fa-paper-plane" aria-hidden="true" style="visibility: hidden;"><span>33</span></i>
                <!-- <i class="material-icons more display-box-notif">more_horiz</i> -->
            </div>
        </div>
    
        <div class="container-94 m-b-20 unset">
            <span class="up-next-etube"></span>
            <div class="etube-content etube-content-detail pd-t-10gaga" style="background-color: #f2f2f2;">
                <div class="v-etube v-etube-detail">
                    <img src="" alt="">
                </div>
                <h1 style="visibility: hidden;">Lorem Ipsum Dolor Sit amet</h1>
                <span style="visibility: hidden;">30 menit lalu</span>
                <span style="visibility: hidden;">2000 view - 100 suka</span>
            </div>
            <div class="etube-content etube-content-detail pd-t-10 fafa" style="background-color: #f2f2f2;">
                <div class="v-etube v-etube-detail">
                    <img src="" alt="">
                </div>
                <h1 style="visibility: hidden;">Lorem Ipsum Dolor Sit amet</h1>
                <span style="visibility: hidden;">30 menit lalu</span>
                <span style="visibility: hidden;">2000 view - 100 suka</span>
            </div>
            <div class="etube-content etube-content-detail pd-t-10 fafa" style="background-color: #f2f2f2;">
                <div class="v-etube v-etube-detail">
                    <img src="" alt="">
                </div>
                <h1 style="visibility: hidden;">Lorem Ipsum Dolor Sit amet</h1>
                <span style="visibility: hidden;">30 menit lalu</span>
                <span style="visibility: hidden;">2000 view - 100 suka</span>
            </div>
        </div>
    </div>
</div>
<!-- KOMENTAR -->
<div class="container-comment">
    <span class="up-next-etube" style="padding-left: 10px !important;color: #212121 !important;">Komentar</span> <span id="close" class="up-next-etube" style="float:right; padding-right: 10px;"><i class="material-icons">close</i></span>
    <div class="fb-comments" data-href="<?="https://www.eyesoccer.id/";?><?=$_SERVER['REQUEST_URI']?>" data-numposts="5"></div>
    <!-- <div class="box-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="input-komentar">
            <input type="text" placeholder="Tambahkan Komentar ...">
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen Ini komentar komentar para nitijen Ini komentar komentar para nitijen Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div>
    <div class="item-komentar">
        <div class="img-radius">
            <img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="" width="100%">
        </div>
        <div class="text-komentar">
            <p>Ini komentar komentar para nitijen</p>
            <h3>ini nama yg komentar</h3>
            <span>30 menit lalu</span>
        </div>
    </div> -->
</div>
<!-- MENU BOTTOM EYETUBE -->
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