<!-- TRENDING -->
<div class="trending">
<span class="trending-s">Trending</span>
    <div id="reqtrend" class='loadtrend' action="home" loading="off" clean="clstrend">
        <div id='clstrend'>
            <script>
                $(document).ready(function () {
                    $(window).on('load', function () {
                        ajaxOnLoad('loadtrend');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='trending' class='cinput'>
        <div class="container over-x trnd">
            <span class="x-c fafa">
                <x class="m-l-100"></x>
                <a href="" class="gr">Choirul Huda</a>
                <a href="" class="gr">IndonesiaU-19</a>
                <a href="" class="gr">Egy Maulana Vikri</a>
                <a href="" class="gr">Persib</a>
                <a href="" class="gr">Liga2</a>
                <a href="" class="gr">Liga Santri Nusantara</a>
                <a href="" class="gr">Liga Champion</a>
                <a href="" class="gr">Liga1</a>
                <a href="" class="gr">Liga Santri Nusantara</a>
                <a href="" class="gr">Liga Champion</a>
                <a href="" class="gr">Liga1</a>
                <a href="" class="gr">Liga Santri Nusantara</a>
                <a href="" class="gr">Liga Champion</a>
                <a href="" class="gr">Liga1</a>
            </span>
        </div>
    </div>
</div>
<!-- EYEPROFILE -->
<div class="container hr-bottom">
<a href="<?= base_url(); ?>eyeprofile/klub">
<div class="SvLSD org">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyeprofile@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -6px;padding-right: 5px;">
    <h2>eyeProfile</h2>
    <!-- <span>see all</span> -->
</div>
</a>
<div class="container">
    <div id='boxtab' class="over-x">
        <ul class="nav nav-tabs custom-nav-tabs">
            <li class="active"><a data-toggle="tab" id="Klub" onclick="tabmenu(this.id, 'a', 'div', 'active')" active="true">Klub</a></li>
            <li><a data-toggle="tab" id="Pemain" onclick="tabmenu(this.id, 'a', 'div', 'active')">Pemain</a></li>
            <li><a data-toggle="tab" id="Pemain2" onclick="tabmenu(this.id, 'a', 'div', 'active')">Pemain Paling Banyak Dilihat</a></li>
        </ul>
    </div>

  <div class="tab-content">
    <div id="Klub" class="tab-pane fade in active">
        <div class="container over-x over-x-bg-g">
            <div class="carousel slide t-30">
                <div role="listbox" class="carousel-inner w-max">
                    <div class="box item active">
                        <div id="reqclub" class="loadclub" action="eyeprofile" loading="off" clean="clsprof">
                            <div id="clsprof">
                                <script>
                                    $(document).ready(function () {
                                        $(window).on('load', function () {
                                            ajaxOnLoad('loadclub');
                                        });
                                    });
                                </script>
                            </div>
                            <input type="hidden" name="fn" value="clubhome" class="cinput">
                            <input type="hidden" name="page" value="<?php echo rand(1, 10) ?>" class="cinput">
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Pemain" class="tab-pane fade">
        <div class="container over-x over-x-bg-g">
            <div class="carousel slide t-30">
                <div role="listbox" class="carousel-inner w-max">
                    <div class="box item active">
                        <div id="reqprofile" class="loadprofile" action="eyeprofile" loading="off" clean="clsprof">
                            <div id="clsprof">
                                <script>
                                    $(document).ready(function () {
                                        $(window).on('load', function () {
                                            ajaxOnLoad('loadprofile');
                                        });
                                    });
                                </script>
                            </div>
                            <input type="hidden" name="fn" value="playerhome" class="cinput">
                            <input type="hidden" name="page" value="<?php echo rand(1, 10) ?>" class="cinput">
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <div id="Pemain2" class="tab-pane fade">
        <div class="container over-x over-x-bg-g">
            <div class="carousel slide t-30">
                <div role="listbox" class="carousel-inner w-max">
                    <div class="box item active">
                        <div id="reqprofilemostsee" class="loadprofilemostsee" action="eyeprofile" loading="off" clean="clsprof">
                            <div id="clsprof">
                                <script>
                                    $(document).ready(function () {
                                        $(window).on('load', function () {
                                            ajaxOnLoad('loadprofilemostsee');
                                        });
                                    });
                                </script>
                            </div>
                            <input type="hidden" name="fn" value="playermostsee" class="cinput">
                            <input type="hidden" name="page" value="<?php echo abs(date('j') - date('n')) ?>" class="cinput">
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="ep-box-content">
                                    <div class="img gr">
                                        <img src="" alt="">
                                    </div>
                                    <div class="ep-detail fafa gr">
                                        <h1>Egy Maulana Vikry</h1>
                                        <p>Posisi: Sayap Kanan<br>
                                            Klub: -<br>
                                            Tanggal Lahir: 7 Juli 2000</p>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- <a href="<?= base_url(); ?>eyeprofile/pemain"><h2 class="ep-h2">Klub</h2></a> -->


<!-- EYEPROFILE -->
<!-- <a href="<?= base_url(); ?>eyeprofile/pemain"><h2 class="ep-h2">Pemain</h2></a> -->

<!-- <a href="<?= base_url(); ?>eyeprofile/pemain"><h2 class="ep-h2">Pemain Paling Banyak Dilihat</h2></a> -->

</div>
<!-- EYETUBE -->
<a href="<?= base_url(); ?>eyetube">
<div class="SvLSD rd">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyetube@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -5px;padding-right: 5px;padding-top: 5px;">
    <h2>eyeTube</h2>
    <span>see all</span>
</div>    
</a>
<div class="container eyetube">
    <div id="reqtube" class='loadtube' action="eyetube" loading="off" clean="clstube">
        <div id='clstube'>
            <script>
                $(document).ready(function () {
                    $(window).on('load', function () {
                        ajaxOnLoad('loadtube');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='vidtube' class='cinput'>
        <div class="v-eyetube gr">
            <img src="" alt="">
        </div>
        <span style="display: none;">30 menit lalu</span>
        <h1 style="display: none;">Lorrem Ipsum solor sit amet</h1>
        <div class="container" style="margin-top: -51px;padding-top: 15px;background-color: #f5f5f5;">
            <div class="etube-content pd-t-10 m2420">
                <div class="v-etube">
                    <img src="" alt="">
                    <div class="btn-play">
                        <img src="<?php echo SUBCDN . "assets/$folder"; ?>img/btn-play.png" alt="">
                    </div>
                </div>
                <h1  class="gr">Lorem Ipsum Dolor Sit amet</h1>
                <span class="gr">30 menit lalu</span>
                <span class="gr">2000 view - 100 suka</span>
            </div>
            <div class="etube-content m2420">
                <div class="v-etube">
                    <img src="" alt="">
                    <div class="btn-play">
                        <img src="<?php echo SUBCDN . "assets/$folder"; ?>img/btn-play.png" alt="">
                    </div>
                </div>
                <h1 class="gr">Lorem Ipsum Dolor Sit amet</h1>
                <span class="gr">30 menit lalu</span>
                <span class="gr">2000 view - 100 suka</span>
            </div>

            <div class="etube-content m2420">
                <div class="v-etube">
                    <img src="" alt="">
                    <div class="btn-play">
                        <img src="<?php echo SUBCDN . "assets/$folder"; ?>img/btn-play.png" alt="">
                    </div>
                </div>
                <h1 class="gr">Lorem Ipsum Dolor Sit amet</h1>
                <span class="gr">30 menit lalu</span>
                <span class="gr">2000 view - 100 suka</span>
            </div>
         </div>
    </div>
</div>
<!-- EYEME -->
<div class="container hr-bottom">
<a href="<?= base_url(); ?>eyeme">
<div class="SvLSD bl">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic-eyeme@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -5px;padding-right: 5px;padding-top: 3px;">
    <h2>eyeMe</h2>
    <span>see all</span>
</div>
</a>
<div class="border-box over-no m-b-20 eme-home-box">
    <div id="reqme" class='loadme' action="eyeme" loading="off" clean="clsme">
        <div id='clsme'>
            <script>
                $(document).ready(function () {
                    $(window).on('load', function () {
                        ajaxOnLoad('loadme');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='melist' class='cinput'>
        <div class="eme-box gr">
            <img src="" alt="">
        </div>
        <div class="eme-box gr">
            <img src="" alt="">
        </div>
        <div class="eme-box gr">
            <img src="" alt="">
        </div>
        <div class="eme-box gr">
            <img src="" alt="">
        </div>
        <div class="eme-box gr">
            <img src="" alt="">
        </div>
        <div class="eme-box gr">
            <img src="" alt="">
        </div>
    </div>
</div>
</div>
<!-- EYENEWS -->
<div class="container hr-bottom">
<a href="<?= base_url(); ?>eyenews">
<div class="SvLSD rd2">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyenews@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -5px;padding-right: 5px;padding-top: 3px;">
    <h2>eyeNews</h2>
    <span>see all</span>
</div>
</a>
<div class="tab2">
	<div class="container eyetube">
		<div id="reqhomenewslist" class='loadhomenewslist' action="eyenews" loading="off" clean="clshomenewslist">
			<div id='clshomenewslist'>
				<script>
					$(document).ready(function () {
						$(window).on('load', function () {
							ajaxOnLoad('loadhomenewslist');
						});
					});
				</script>
			</div>
			<input type='hidden' name='fn' value='homenewslist' class='cinput'>
			<input type='hidden' name='limit' value='7' class='cinput'>
			<input type='hidden' name='page' value='1' class='cinput'>
			<input type='hidden' name='desc' value='true' class='cinput'>
			<div class="v-eyetube">
				<img src="" alt="">
			</div>
            <span id='tab-populer' class="orange-active no-border" active="true" style="padding: 10px;bottom: 0;color: #FF5722;">Terkini</span>
			<a href="https://localhost/mob.eyesoccer.id/eyenews/detail/di-website-fifa-bali-united-yang-jadi-juara-liga-1-2017" title="Di Website FIFA Bali United yang Jadi Juara Liga 1 2017">
            <div class="etube-content pd-t-10 m2420">
                <div class="v-etube">
                    <img src="" alt="">
                    <div class="btn-play">
                        <img src="http://localhost/mobile.eyesoccer/assets/themes/v1/img/btn-play.png" alt="">
                    </div>
                </div>
                <h1 class="gr">Lorem Ipsum Dolor Sit amet</h1>
                <span class="gr" style="height: 8px;color: transparent !important;">30 menit lalu</span>
                <span class="gr" style="height: 8px;color: transparent !important;">2000 view - 100 suka</span>
            </div>
			</a>
		</div>
	</div>
    <div id="reqtabnews" class='loadtabnews' action="eyenews" loading="off" clean="clstabnews">
        <div id='clstabnews'>
            <script>
                $(document).ready(function () {
                    $(window).on('load', function () {
                        ajaxOnLoad('loadtabnews');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='tabnews' class='cinput'>
    </div>
</div>
</div>
<!-- EYEMARKET -->
<div class="container hr-bottom">
<a href="<?= base_url(); ?>eyemarket">
<div class="SvLSD yl">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyemarket@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -8px;padding-right: 5px;">
    <h2>eyeMarket</h2>
    <span>see all</span>
</div>
</a>
<div class="container over-x">
    <div id="emSlide" class="carousel slide t-30">
        <div role="listbox" class="carousel-inner w-max">
            <div id="reqmarket" class='loadmarket' action="eyemarket" loading="off" clean="clstube">
                <div id="clsmarket">
                    <script>
                        $(document).ready(function () {
                            $(window).on('load', function () {
                                ajaxOnLoad('loadmarket');
                            });
                        });
                    </script>
                </div>
                <input type='hidden' name='fn' value='market' class='cinput'>
                <div class="box item active">


                    <a href="">
                    <div class="em-box-content">
                        <div class="container img-gr-emarket">
                        </div>
                        <h1 class="gr w90m5" style="color:  transparent !important;">lorem ipsum dolor sit</h1>
                        <p class="gr prices w90m5">Rp. 500.000</p>
                        <button type="text" class="beli gr w90m5" style="color:  transparent !important;">Beli</button>
                    </div>
                    </a>
                    <a href="">
                    <div class="em-box-content">
                        <div class="container img-gr-emarket">
                        </div>
                        <h1 class="gr w90m5" style="color:  transparent !important;">lorem ipsum dolor sit</h1>
                        <p class="gr prices w90m5">Rp. 500.000</p>
                        <button type="text" class="beli gr w90m5" style="color:  transparent !important;">Beli</button>
                    </div>
                    </a>
                    <a href="">
                    <div class="em-box-content">
                        <div class="container img-gr-emarket">
                        </div>
                        <h1 class="gr w90m5" style="color:  transparent !important;">lorem ipsum dolor sit</h1>
                        <p class="gr prices w90m5">Rp. 500.000</p>
                        <button type="text" class="beli gr w90m5" style="color:  transparent !important;">Beli</button>
                    </div>
                    </a>
                    <a href="">
                    <div class="em-box-content">
                        <div class="container img-gr-emarket">
                        </div>
                        <h1 class="gr w90m5" style="color:  transparent !important;">lorem ipsum dolor sit</h1>
                        <p class="gr prices w90m5">Rp. 500.000</p>
                        <button type="text" class="beli gr w90m5" style="color:  transparent !important;">Beli</button>
                    </div>
                    </a>
                    <a href="">
                    <div class="em-box-content">
                        <div class="container img-gr-emarket">
                        </div>
                        <h1 class="gr w90m5" style="color:  transparent !important;">lorem ipsum dolor sit</h1>
                        <p class="gr prices w90m5">Rp. 500.000</p>
                        <button type="text" class="beli gr w90m5" style="color:  transparent !important;">Beli</button>
                    </div>
                    </a>
                    <a href="">
                    <div class="em-box-content">
                        <div class="container img-gr-emarket">
                        </div>
                        <h1 class="gr w90m5" style="color:  transparent !important;">lorem ipsum dolor sit</h1>
                        <p class="gr prices w90m5">Rp. 500.000</p>
                        <button type="text" class="beli gr w90m5" style="color:  transparent !important;">Beli</button>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- EYEVENT -->
<a href="<?= base_url(); ?>eyevent">
<div class="SvLSD grn">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyevent@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -8px;padding-right: 5px;">
    <h2>eyeVent</h2>
    <span>see all</span>
</div>
</a>
<div class="container over-x">
    <div id="evSlide" class="carousel slide t-30">
        <div id="reqevent" class='loadevent' action="eyevent" loading="off" clean="clsevent">
            <div id='clsevent'>
                <script>
                    $(document).ready(function () {
                        $(window).on('load', function () {
                            ajaxOnLoad('loadevent');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='event_list' class='cinput'>
            <input type='hidden' name='page' value='home' class='cinput'>
            <input type='hidden' name='limit' value='3' class='cinput'>
            <!-- <div role="listbox" class="carousel-inner w-max">
                <div class="box item active">
                    <div class="ev-box-content">

                    </div>
                    <div class="ev-box-content">

                    </div>
                    <div class="ev-box-content">

                    </div>
                </div>
                <div class="box item">
                    <div class="ev-box-content">

                    </div>
                    <div class="ev-box-content">

                    </div>
                    <div class="ev-box-content">

                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- <div class="container pd-t-10">
    <div class="bx-nav">
        <i class="material-icons left i-bx-l" href="#evSlide" role="button">keyboard_arrow_left</i>
        <i class="material-icons right i-bx-r" href="#evSlide" role="button">keyboard_arrow_right</i>
    </div>
</div> -->
<!-- JADWAL PERTANDINGAN -->
<div class="container tx-c">
    <span class="jp green">JADWAL PERTANDINGAN</span>
    <div class="border-box">
        <div id="reqmatch" class='loadmatch' action="eyevent" loading="off" clean="clsmatch">
            <div id='clsmatch'>
                <script>
                    $(document).ready(function () {
                        $(window).on('load', function () {
                            ajaxOnLoad('loadmatch');
                        });
                    });
                </script>
            </div>
            <input type='hidden' name='fn' value='match_schedule' class='cinput'>
            <!-- <div class="container bg-g">
                <div class="t-tab">
                    <div class="day-choose">
                        <a href="">Senin
                            <span>16 Oktober</span>
                        </a>
                    </div>
                    <div class="day-choose t-active">
                        <a href="">Hari ini
                            <span>17 Oktober</span>
                        </a>
                    </div>
                    <div class="day-choose">
                        <a href="">Besok
                            <span>18 Oktober</span>
                        </a>
                    </div>
                </div>
            </div> -->
            <!-- <table class="table border-b">
                <tbody>
                <tr>
                    <td class="tx-r">Arsenal<span class="i-l"><img src="" alt=""></span></td>
                    <td class="tx-c">01:45<span class="t-live"></span></td>
                    <td class="tx-l"><span class="i-r"><img src="" alt=""></span>Arsenal</td>
                </tr>
                <tr>
                    <td class="tx-r">Arsenal<span class="i-l"><img src="" alt=""></span></td>
                    <td class="tx-c">01:45<span class="t-live">Live di SCTV</span></td>
                    <td class="tx-l"><span class="i-r"><img src="" alt=""></span>Arsenal</td>
                </tr>
                <tr>
                    <td class="tx-r">Arsenal<span class="i-l"><img src="" alt=""></span></td>
                    <td class="tx-c">01:45<span class="t-live"></span></td>
                    <td class="tx-l"><span class="i-r"><img src="" alt=""></span>Arsenal</td>
                </tr>
                <tr>
                    <td class="tx-r">Arsenal<span class="i-l"><img src="" alt=""></span></td>
                    <td class="tx-c">01:45<span class="t-live"></span></td>
                    <td class="tx-l"><span class="i-r"><img src="" alt=""></span>Arsenal</td>
                </tr>
                <tr>
                    <td class="tx-r">Arsenal<span class="i-l"><img src="" alt=""></span></td>
                    <td class="tx-c">01:45<span class="t-live">Live di SCTV</span></td>
                    <td class="tx-l"><span class="i-r"><img src="" alt=""></span>Arsenal</td>
                </tr>
                </tbody>
            </table> -->
        </div>
        <div class="t-c-b">
            <a href="<?= base_url(); ?>eyevent/hasil-pertandingan">
                <button type="" class="btn-green">Lihat Jadwal & Hasil Lainnya</button>
            </a>
        </div>
    </div>
</div>
<!-- BANNER -->
<div class="border-box">
    <div class="banner-150">
        <img src="https://eyesoccer.id/assets/img/BANNER-MOBILE.jpg" alt="">
    </div>
</div>
<!-- KLASEMEN -->
<div id="reqklasemen" class='loadklasemen' action="eyevent" loading="off" clean="clsklasemen">
    <div id='clsklasemen'>
        <script>
            $(document).ready(function () {
                $(window).on('load', function () {
                    ajaxOnLoad('loadklasemen');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='klasemen' class='cinput'>

    <!-- <div class="border-box">
        <span class="jp-k">KLASEMEN</span>
        <select id="list-liga" name="liganya" selected="true" class="slct-lg">
            <option value="">Liga 1 Indonesia</option>
            <option value="">Liga Inggris</option>
            <option value="">Liga Spanyol</option>
            <option value="">Liga Italia</option>
        </select>
        <div class="border-box pd-l-0">
            <table class="table table-striped m-b-20">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Klub</th>
                    <th>Main</th>
                    <th>M</th>
                    <th>S</th>
                    <th>K</th>
                    <th>Poin</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img src="" alt="" width="15px"> Nama Klub
                    </td>
                    <td>10</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>10</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div> -->
</div>