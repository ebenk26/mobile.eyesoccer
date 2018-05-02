	<!-- CONTENT BODY -->
    <div class="crumb">
		<ul>
			<li><a href="<?php echo base_url();?>" style="display:unset;">Home</a></li>
			<li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Eyeprofile</a></li>
			<li><a href="<?php echo base_url();?>eyeprofile/pemain" style="display:unset;">Pemain</a></li>
			<li id="slug_pemain_detail"><?php echo urldecode($slug);?></li>
		</ul>
	</div>
    <div class="eprofile eprofile-detail">
		<div id="reqdetailplayer" class='loaddetailplayer' action="eyeprofile" loading="off" clean="clsdetailplayer">
			<div id='clsdetailclub'>
				<script>
					$(document).ready(function(){
						$(window).on('load',function(){
							ajaxOnLoad('loaddetailplayer');
						});
					});
				</script>
			</div>
			<input type='hidden' name='fn' value='detailplayer' class='cinput'>
			<input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
			<div class="head">
				<div class="img-radius gr">
					<img src="" alt="">
				</div>
				<h2 class="h2-text-bottom gr">Nama Pemain</h2>
				<p style="display:none;">
						ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain 
				</p>
			</div>
			<div class="container b-t-b-5 table-profile">
				<table style="font-size: 1em;">
					<tr>
						<th colspan="2">Profil</th>
					</tr>
					<tr>
						<td>Kewarganegaraan</td>
						<td>indonesia</td>
					</tr>
					<tr>
						<td>tempat lahir</td>
						<td>jakarta</td>
					</tr>
					<tr>
						<td>tanggal lahir</td>
						<td>17 juni 1990</td>
					</tr>
					<tr>
						<td>debut</td>
						<td>17 maret 1990</td>
					</tr>
					<tr>
						<td>tinggi</td>
						<td>195 cm</td>
					</tr>
					<tr>
						<td>berat</td>
						<td>122</td>
					</tr>
					<tr>
						<td>tampil</td>
						<td>33</td>
					</tr>
					<tr>
						<td>goal</td>
						<td>0</td>
					</tr>
				</table>
			</div>
			<!-- <div class="container table-blue">
				<h3 class="h3-orange">karir klub</h3>
				<div class="table-scroll-x">
				<table class="table-stripe">
					<tr>
						<th>#</th>
						<th>klub</th>
						<th>Tahun</th>
						<th>main</th>
						<th>gol</th>
						<th>pelatih</th>
					</tr>
					<tr>
						<td>1</td>
						<td>persib bandung</td>
						<td>2017</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td>lorem ipsum</td>
						<td>x</td>
						<td>x</td>
						<td>x</td>
						<td>x</td>
					</tr>
				</table>
				</div>
				<h3 class="h3-orange">karir timnas</h3>
				<div class="table-scroll-x">
				<table class="table-stripe">
					<tr>
						<th>#</th>
						<th>timnas</th>
						<th>Tahun</th>
						<th>main</th>
						<th>gol</th>
						<th>pelatih</th>
					</tr>
					<tr>
						<td>1</td>
						<td>persib bandung</td>
						<td>2017</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td>lorem ipsum</td>
						<td>x</td>
						<td>x</td>
						<td>x</td>
						<td>x</td>
					</tr>
				</table>
				</div>
				<h3 class="h3-orange" style="display:none;">detail posisi</h3>
				<div class="container detail-posisi" style="display:none;">
					<img src="http://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/small" alt="" style="display:none;">
					<div class="container" style="background-color: #fafafaa3;">
						<div class="half-content">
							<h4>posisi utama</h4>
							<span>gelandang bertahan</span>
						</div>
						<div class="half-content">
							<h4>posisi lainnya</h4>
							<span>gelandang tengah</span>
							<span>bek tengah</span>
						</div>
					</div>
				</div>
				<h3 class="h3-orange" style="display:none;">statistik</h3>
				<div class="container eprofile-statistik" style="display:none;">
					<table>
						<tr>
							<th colspan="2">
								<ul>
									<li>
										<a href="#">Home</a>
									</li>
									<li>
										<a href="#">Menu 1</a>
									</li>
									<li>
										<a href="#">Menu 2</a>
									</li>
									<li>
										<a href="#">Menu 3</a>
									</li>
								</ul>
							</th>
						</tr>
						<tr>
							<td>lorem</td>
							<td>ipsum</td>
						</tr>
						<tr>
							<td>lorem</td>
							<td>ipsum</td>
						</tr>
						<tr>
							<td>lorem</td>
							<td>ipsum</td>
						</tr>
						<tr>
							<td>lorem</td>
							<td>ipsum</td>
						</tr>
					</table>
				</div> -->
				<!-- <h3 class="h3-orange">Foto galeri</h3>
				<div class="container">
					<div class="display-img">
						<img class="container" src="https://images.performgroup.com/di/library/GOAL/db/72/emral-abus-persib-bandung_3q9saag8abcl1etjndmg3mncr.jpg" alt="">
					</div>
					<div class="arrow">
						<i class="material-icons">keyboard_arrow_left</i>
						<i style="float: right;" class="material-icons">keyboard_arrow_right</i>
					</div>
				</div> -->
			</div>
		</div>
    </div>