	<!-- CONTENT BODY -->
    <div class="crumb">
            <ul>
                <li><a href="<?php echo base_url();?>" style="display:unset;">Home</a></li>
                <li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Eyeprofile</a></li>
                <li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Klub</a></li>
                <li id="slug_klub_detail"><?php echo urldecode($slug);?></li>
            </ul>
	</div>
    <div class="eprofile">
		<div id="reqdetailclub" class='loaddetailclub' action="eyeprofile" loading="off" clean="clsdetailclub">
			<div id='clsdetailclub'>
				<script>
					$(document).ready(function(){
						$(window).on('load',function(){
							ajaxOnLoad('loaddetailclub');
						});
					});
				</script>
			</div>
			<input type='hidden' name='fn' value='detailclub' class='cinput'>
			<input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
			<div class="head" style="border-radius: 8px 8px 0px 0px;height: 210px;min-height:  unset;">
				<div class="container tx-c">
					<div class="img-radius" style="background-color: white;">
						<img src="" alt="">
					</div>
				</div>
				<h2 class="tx-c h2-pemain-top-head"><?php echo urldecode($slug);?></h2>
					<div class="container over-x">
						<div id="boxtab" class="container tab-sub-menu w-max m-0" style="float: unset;position: relative;bottom: unset;margin-top: 20px;">
							<a style="padding: 0 8px;" class="active">Info</a>
							<a style="border-left: 1px solid;padding: 0 8px;">Pemain</a>
							<a style="border-left: 1px solid;border-right:  1px solid;border-color: white; padding: 0 8px;">Ofisial</a>
							<a style="padding: 0 8px;border-right:  1px solid;">Prestasi</a>
							<a style="padding: 0 8px;">Galeri</a>
						</div>
					</div>
			</div>
			
			<div id="tab-info" class="container" style="display: block;">
					<div class="ep-des">
					<!-- <h2 class="tx-c" style="font-weight: 400;">ABSTRAX FA (U11)</h2>	 -->
										<table class="content-tab-eprofile mg-t15">
							<tbody><tr>
								<td>Julukan</td>
								<td style="font-weight:bold">: </td>
							</tr>
							<tr>
								<td>Tanggal Berdiri</td>
								<td>: </td>
							</tr>
							<tr>
								<td>Pemilik</td>
								<td>: </td>
							</tr>
							<tr>
								<td>Alamat Sekretariat</td>
								<td>: </td>
							</tr>
							<tr>
								<td>Email</td>
								<td>: </td>
							</tr>
							<tr>
								<td>Jumlah Pemain</td>
								<td>: </td>
							</tr>
						</tbody></table>
					</div>
				</div>
        </div>
	</div>
        <div class="container box-jadwal" style="position: relative;display:none;">
            <h3 id="next_match_klub" class="h3-orange">Hasil Pertandingan Liga1</h3>
            <div class="jadwal">
				<div id="reqmatchlist" class='loadmatchlist' action="eyeprofile" loading="off" clean="clsmatchlist">
					<div id='clsmatchlist'>
						<script>
							$(document).ready(function(){
								$(window).on('load',function(){
									ajaxOnLoad('loadmatchlist');
								});
							});
						</script>
					</div>
					<input type='hidden' name='fn' value='matchlist' class='cinput'>
					<input type='hidden' name='slug' value='<?php echo urldecode($slug);?>' class='cinput'>
					<div class="jadwal-content">
						<table>
								<tr>
									<td>22 Okt</td>
									<td>08:45</td>
								</tr>
								<tr>
									<td>Perseru Serui</td>
									<td>2</td>
								</tr>
								<tr>
									<td>Persipura</td>
									<td>2</td>
								</tr>
						</table>
					</div>
					<div class="jadwal-content">
						<table>
							<tr>
								<td class="red">22 Okt</td>
								<td>08:45</td>
							</tr>
							<tr>
								<td>Perseru Serui</td>
								<td>2</td>
							</tr>
							<tr>
								<td>Persipura</td>
								<td>2</td>
							</tr>
						</table>
					</div>
                </div>
            </div>
        </div>
        <div class="container" style="display:none;">
                <div class="container sub-menu-tab">
                    <div class="w-max">
                        <h3 class="h3-orange this-h3-orange" style="color: #FF9800">
                            <a href="#transfer">Transfer terbaru</a>
                        </h3>
                        <h3 id="musim" class="h3-orange clear-h3-orange">
                            <a href="#klasemen">klasemen liga 1 indonesia</a>
                        </h3>
                        <h3 class="h3-orange clear-h3-orange">
                            <a href="#pencetak">pencetak gol terbanyak</a>
                        </h3>
                    </div>
                </div>
                <div id="musimSelect" class="container" style="display: none;">
                    <span style="font-size:.8em;">Pilih Musim</span>
                    <select id="" name="" selected="true" class="slc-musim">
                        <option value="">2017</option>
                        <option value="">2017</option>
                        <option value="">2017</option>
                        <option value="">2017</option>
                    </select>
                </div>
                <div class="container table-blue" style="overflow: scroll;height: 250px;">
                    <div class="w-max">
                        <div id="transfer" class="box-pertandingan pencetak-gol transfer-pemain">
                            <div class="table-scroll-x" style="border: unset;border-radius: unset;">
                            <table class="table-stripe">
                                <tr>
                                    <th>#</th>
                                    <th>pemain</th>
                                    <th>status</th>
                                    <th>dari</th>
                                    <th>ke</th>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>raphael <span>gelandang tengah</span></td>
                                    <td>33</td>
                                    <td><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                    <td><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>raphael <span>gelandang tengah</span></td>
                                    <td>33</td>
                                    <td><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                    <td><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""></td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        <div id="klasemen" class="box-pertandingan klasemen disable-i-style">
                            <div class="table-scroll-x" style="border: unset;border-radius: unset;">
                            <table class="table-stripe">
                                <tr>
                                    <th>#</th>
                                    <th>klub</th>
                                    <th>main</th>
                                    <th>m</th>
                                    <th>s</th>
                                    <th>k</th>
                                    <th>SG</th>
                                    <th>poin</th>
                                </tr>
                                <tr>
                                    <td>9<i class="material-icons green">arrow_drop_up</i></td>
                                    <td style="min-width: 100px;"><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""> arema FC</td>
                                    <td>3234230</td>
                                    <td>1134125</td>
                                    <td>91234123</td>
                                    <td>6123414</td>
                                    <td>31234124</td>
                                    <td>312341233</td>
                                </tr>
                                <tr>
                                    <td>9<i class="material-icons red">arrow_drop_down</i></td>
                                    <td style="min-width: 100px;"><img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt=""> arema FC</td>
                                    <td>3234230</td>
                                    <td>1134125</td>
                                    <td>91234123</td>
                                    <td>6123414</td>
                                    <td>31234124</td>
                                    <td>312341233</td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        <div id="pencetak" class="box-pertandingan pencetak-gol">
                            <div class="table-scroll-x" style="border: unset;border-radius: unset;">
                            <table class="table-stripe">
                                <tr>
                                    <th>#</th>
                                    <th>pemain</th>
                                    <th>umur</th>
                                    <th>klub</th>
                                    <th>gol</th>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>raphael <span>gelandang tengah</span></td>
                                    <td>33</td>
                                    <td>19</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>raphael <span>gelandang tengah</span></td>
                                    <td>33</td>
                                    <td>19</td>
                                    <td>7</td>
                                </tr>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="emSlide" class="carousel slide">
                    <div role="listbox" class="carousel-inner">
						<a href="<?= base_url(); ?>eyemarket">
							<div id="emSlide" class="carousel slide">
							<div role="listbox" class="carousel-inner">
							<div class="SvLSD yl">
							<img src="<?= base_url(); ?>assets/themes/v1/img/ic_eyemarket@2x.png" alt="" style="float:  left;background-color: white;margin-bottom: -8px;padding-right: 5px;">
								<h2>eyeMarket</h2>
								<span>see all</span>
							</div>
						</a>
						<div id="reqmarket" class='loadmarket' action="eyemarket" loading="off" clean="clstube">
							<div id="clsmarket">
								   <script>
										$(document).ready(function(){
											$(window).on('load',function(){
												ajaxOnLoad('loadmarket');
											});
										});
									</script>
							</div>
							<input type='hidden' name='fn' value='market' class='cinput'>
							<div class="container over-x">
								<div class="box item active w-max">
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
    </div>
