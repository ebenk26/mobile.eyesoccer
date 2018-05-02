<!-- TRENDING -->
<div class="trending">
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
        <span class="x-c fafa">
            <span>Trending</span>
            <!-- <x class="m-l-100"></x> -->
            <a href="" class="gr">Choirul Huda</a>
            <a href="" class="gr">IndonesiaU-19</a>
            <a href="" class="gr">Egy Maulana Vikri</a>
            <a href="" class="gr">Persib</a>
            <a href="" class="gr">Liga2</a>
            <a href="" class="gr">Liga Santri Nusantara</a>
            <a href="" class="gr">Liga Champion</a>
            <a href="" class="gr">Liga1</a>
        </span>
    </div>
</div>
<!-- EYEPROFILE -->
<a href="<?= base_url(); ?>eyeprofile/klub/Liga%20Indonesia%201/1">
<div class="SvLSD org">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyeprofile@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -6px;padding-right: 5px;">
    <h2>eyeProfile</h2>
    <span>see all</span>
</div>
</a>
<div class="container over-x">
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
                    <input type="hidden" name="page" value="<?php echo rand(1, 100) ?>" class="cinput">
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
        <div class="container" style="margin-top: -40px;background-color: #fafafa;">
            <div class="etube-content pd-t-10">
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
            <div class="etube-content">
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

            <div class="etube-content">
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
<a href="<?= base_url(); ?>eyeme">
<div class="SvLSD bl">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic-eyeme@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -5px;padding-right: 5px;padding-top: 3px;">
    <h2>eyeMe</h2>
    <span>see all</span>
</div>
</a>
<div class="border-box over-no pd-l-4 m-b-20" style="padding-left: 1vw !important; width: 98vw;">
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
    </div>
</div>
<!-- EYENEWS -->
<a href="<?= base_url(); ?>eyenews">
<div class="SvLSD rd2">
<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyenews@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -5px;padding-right: 5px;padding-top: 3px;">
    <h2>eyeNews</h2>
    <span>see all</span>
</div>
</a>
<div class="p-container tab2" style="padding-top: 0px;">
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
			<!-- <div class="v-eyetube">
				<img src="" alt="">
			</div>
			<span style="padding-bottom: 0;margin-bottom: 0;">30 menit lalu</span>
			<h1 style="padding-top: 0;margin-top: -5px;">Lorrem Ipsum solor sit amet</h1>
			<span id='tab-populer' class="orange-active" active="true" style="bottom: 0;color: #FF5722;">Terkini</span>
			<a href="https://localhost/mob.eyesoccer.id/eyenews/detail/di-website-fifa-bali-united-yang-jadi-juara-liga-1-2017" title="Di Website FIFA Bali United yang Jadi Juara Liga 1 2017">
				<div class="rek-ber-c">
					<div class="img-res-height" style="margin-top: 0;">
						<img src="https://static.eyesoccer.id/v1/cache/images/2359-FIFAlagi.jpg/small" alt="Di Website FIFA Bali United yang Jadi Juara Liga 1 2017">
					</div>
					<span style="position: unset;">12 Nov 2017 22:19:06</span>
					<h1 style="bottom: 0;padding: unset;">Di Website FIFA Bali United yang Jadi Juara Liga 1 2017</h1>
					<p>JAKARTA - Kompetisi Liga 1 2017 memang sudah selesai. Dan,�
					</p>
				</div>
			</a> -->
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
        <!-- <div id='boxtab'>
            <span id='tab-populer' onclick="tabmenu(this.id, 'orange-active')" class="orange-active" active="true">terpopuler</span>
            <span id='tab-rekomendasi' onclick="tabmenu(this.id, 'orange-active')">rekomendasi</span>
            <span id='tab-usiamuda' onclick="tabmenu(this.id, 'orange-active')">usia muda</span>
        </div>
        <hr>
        <div role="listbox" class="carousel-inner">
            <div id='tab-populer' class="box item active">
                <div class="container rek-ber">
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.451</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.45</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.45</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                </div>
            </div>
            <div id='tab-rekomendasi' class="box item">
                <div class="container rek-ber">
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.452</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.45</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.45</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                </div>
            </div>
            <div id='tab-usiamuda' class="box item">
                <div class="container rek-ber">
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.453</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.45</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                    <div class="rek-ber-c">
                        <img src="" alt="">
                        <span>17 Okt 2017 - 12.45</span>
                        <h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
                        <p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- EYEMARKET -->
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
                <!-- <div class="box item active">


                    <a href="">
                        <div class="em-box-content">
                            <img src="" alt="">
                            <h1>lorem ipsum dolor sit</h1>
                            <p class="prices">Rp. 500.000</p>
                            <button type="text" class="beli">Beli</button>
                        </div>
                    </a>
                    <a href="">
                        <div class="em-box-content">
                            <img src="" alt="">
                            <h1>lorem ipsum dolor sit</h1>
                            <p class="prices">Rp. 500.000</p>
                            <button type="text" class="beli">Beli</button>
                        </div>
                    </a>
                </div> -->
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
        <img src="httpss://eyesoccer.id/assets/img/BANNER-MOBILE.jpg" alt="">
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