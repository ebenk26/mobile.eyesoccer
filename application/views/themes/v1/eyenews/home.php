    <!-- TRENDING --> 
    <!-- <div class="trending"> -->
        <!--<div id="reqtrend" class='loadtrend' action="eyenews" loading="off" clean="clstrend">
			<div id='clstrend'>-->
				<!-- <script>
					$(document).ready(function(){
						$(window).on('load',function(){
							ajaxOnLoad('loadtrend');
						});
					});
				</script> -->
			<!--</div>
			<input type='hidden' name='fn' value='trending' class='cinput'>-->
			<!-- <span class="x-c fafa">
				<span>Trending</span>
				<x class="m-l-100"></x>
				<a href="" class="gr">Choirul Huda</a>
				<a href="" class="gr">IndonesiaU-19</a>
				<a href="" class="gr">Egy Maulana Vikri</a>
				<a href="" class="gr">Persib</a>
			</span> -->
			<!-- <span class="x-c">
				<span  class="fafa">
					<ul>
						<li>
							<a href="" class="fafa">LIGA</a>
							<ul>
								<li><a href="">Di Pinggir Lapangan</a></li>
								<li><a href="">Di Pinggir Lapangan</a></li>
								<li><a href="">Di Pinggir Lapangan</a></li>
								<li><a href="">Di Pinggir Lapangan</a></li>
							</ul>
						</li>
					</ul>
				</span>
				<div class="container">
					<a href="" class="gr">Choirul Huda</a>
					<a href="" class="gr">IndonesiaU-19</a>
					<a href="" class="gr">Egy Maulana Vikri</a>
					<a href="" class="gr">Persib</a>
				</div>
			</span> -->
		<!--</div>-->
	<!-- </div> -->
	<!-- <div class="container xc" style="margin-top: 50px;">
		<table>
			<tr>
				<td>
					<div class="cat-x">
						<ul>
							<li>
								<button onclick="dd()">LIGA</button>
								<button onclick="dd()" style="padding-right: 30px;">
									Kategori
									<i class="material-icons" style="position: absolute;top: 5px;right: 10px;">arrow_drop_down</i>
								</button>
								<ul id="ddcl" style="height: auto;">
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Di Pinggir Lapangan">Di Pinggir Lapangan</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Liga">Liga</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Pembinaan">Pembinaan</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Peristiwa">Peristiwa</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Prediksi">Prediksi</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Soccer Sains">Soccer Sains</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Soccer Seri">Soccer Seri</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Tulisan Kamu">Tulisan Kamu</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Ulas Tuntas">Ulas Tuntas</a>
									</li>
									<li>
										<a href="<?php echo base_url();?>eyenews/kategori/Umpan Lambung">Umpan Lambung</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</td>
				<td class="container over-x" style="max-width: 90vw !important;height: max-content;margin-bottom: -23px;">
					<div class="trend w-max" style="margin-top: 7px;">
						<div id="reqtrend" class='loadtrend' action="eyenews" loading="off" clean="clstrend">
							<div id='clstrend'>
								<script>
									$(document).ready(function(){
										$(window).on('load',function(){
											ajaxOnLoad('loadtrend');
										});
									});
								</script>
							</div>
							<input type='hidden' name='fn' value='trending' class='cinput'>
							<a class="gr" href="">Choirul Huda</a>
							<a class="gr" href="">IndonesiaU-19</a>
							<a class="gr" href="">Egy Maulana Vikri</a>
							<a class="gr" href="">Persib</a>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div> -->
	<div class="container top-menu-ketegori over-x" style="margin-top: 55px;">
        <div class="w-max">
			<a href="<?php echo base_url();?>eyenews/kategori/Di Pinggir Lapangan">Di Pinggir Lapangan</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Liga">LIGA</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Pembinaan">Pembinaan</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Peristiwa">Peristiwa</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Prediksi">Prediksi</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Soccer Sains">Soccer Sains</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Soccer Seri">Soccer Seri</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Tulisan Kamu">Tulisan Kamu</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Ulas Tuntas">Ulas Tuntas</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Umpan Lambung">Umpan Lambung</a>
        </div>
    </div>
    <!-- EYENEWS -->
	<div id="reqonelist" class='loadonelist' action="eyenews" loading="off" clean="clsonelist">
		<div id='clsonelist'>
			<script>
				$(document).ready(function(){
					$(window).on('load',function(){
						ajaxOnLoad('loadonelist');
					});
				});
			</script>
		</div>
		<input type='hidden' name='fn' value='onelist' class='cinput'>
		<input type='hidden' name='limit' value='4' class='cinput'>
		<input type='hidden' name='page' value='1' class='cinput'>
		<input type='hidden' name='desc' value='true' class='cinput'>
		<a href="enews-detail.html">
		<div class="container eyetube fafa">
			<div class="container" style="background-color: #fafafa !important;height: 220px;overflow: hidden;">
				<img src="" alt="">
			</div>
		</div>
		</a>
	</div>
    <div class="p-container tab2" style="padding-top: 0px;">
		<div id="reqtabnews" class='loadtabnews' action="eyenews" loading="off" clean="clstabnews">
			<div id='clstabnews'>
				<script>
					$(document).ready(function(){
						$(window).on('load',function(){
							ajaxOnLoad('loadtabnews');
						});
					});
				</script>
			</div>
			<input type='hidden' name='fn' value='tabnews' class='cinput'>

				<span id='tab-populer' onclick="tabmenu(this.id, 'orange-active')" class="orange-active gr">terpopuler</span>
				<span id='tab-rekomendasi' onclick="tabmenu(this.id, 'orange-active')" class="gr">rekomendasi</span>
				<span id='tab-usiamuda' onclick="tabmenu(this.id, 'orange-active')" class="gr">usia muda</span>
			
			<hr>
			<div role="listbox" class="carousel-inner">                    
				<div id='tab-populer' class="box item active">
					<div class="container rek-ber fafa">
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.451</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
						<div class="rek-ber-c">
							<div class="img-res-height">
                                <img src="" alt="">                                
                            </div>
							<span>17 Okt 2017 - 12.45</span>
							<h1>lorem ipsum dolor sit amet lorem ipsum dolor sit amet </h1>
							<p>lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="container" style="margin-top: 0px !important; background-color: #fafafa;">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
			 style="display:block; text-align:center;"
			 data-ad-layout="in-article"
			 data-ad-format="fluid"
			 data-ad-client="ca-pub-7635854626605122"
			 data-ad-slot="3624793128"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>

	<!-- USIA MUDA -->
    <div class="container" style="margin-top: 0px !important; background-color: #fafafa;">
        <h3 class="h3-red">PEMBINAAN</h3>
        <div class="carousel slide t-30 over-x">
            <div role="listbox" class="carousel-inner w-max">
                <div class="box item active no-decoration">
					<div id="" class='' action="" loading="" clean="">
						<div id="reqnewsyoung" class='loadnewsyoung' action="eyenews" loading="off" clean="clsnewsyoung">
							<div id='clsnewsyoung'>
								<script>
									$(document).ready(function(){
										$(window).on('load',function(){
											ajaxOnLoad('loadnewsyoung');
										});
									});
								</script>
							</div>
							<input type='hidden' name='fn' value='newsyoung' class='cinput'>
							<a href="enews-detail.html">
								<div class="video-thumb fafa">
									<div class="v-thumb-img">
										<img src="" alt="">
									</div>
									<h2>Lorem Ipsum Dolor Sit Amet</h2>
									<span>2 jam lalu</span>
								</div>
							</a>
							<a href="enews-detail.html">
								<div class="video-thumb fafa">
									<div class="v-thumb-img">
										<img src="" alt="">
									</div>
									<h2>Lorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit Amet</h2>
									<span>2 jam lalu</span>
								</div>
							</a>
						</div>
					</div>
                </div>
            </div>
        </div>
	</div>
	
	<!-- EYENEWS VIDEO -->
    <div class="container" style="background-color: #fafafa;">
        <h3 class="h3-red">VIDEO</h3>
        <div class="carousel slide t-30 over-x">
            <div role="listbox" class="carousel-inner w-max">
                <div class="box item active no-decoration">
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
						<input type='hidden' name='fn' value='list_tube_eyenews' class='cinput'>
						<a href="enews-detail.html">
							<div class="video-thumb fafa">
								<div class="v-thumb-img">
									<img src="" alt="">
								</div>
								<h2>Lorem Ipsum Dolor Sit Amet</h2>
								<span>2 jam lalu</span>
							</div>
						</a>
						<a href="enews-detail.html">
							<div class="video-thumb fafa">
								<div class="v-thumb-img">
									<img src="" alt="">
								</div>
								<h2>Lorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit AmetLorem Ipsum Dolor Sit Amet</h2>
								<span>2 jam lalu</span>
							</div>
						</a>
					</div>
                </div>
            </div>
        </div>
    </div>
	