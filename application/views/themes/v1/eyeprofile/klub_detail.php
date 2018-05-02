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
			<div class="head">
				<div class="img-radius">
					<img src="https://www.eyesoccer.id/systems/club_logo/2034LOGO UNTUK APLIKASI.jpg"
						alt="">
				</div>
				<h2 class="h2-text-bottom"><?php echo urldecode($slug);?></h2>
				<div class="container tab-eprofile">
					<a class="active" href="#content1">Info</a>
				</div>
				<div class="table-scroll">
					<table class="content-tab-eprofile">
						<tr>
							<td>Jumlah Klub</td>
							<td>: 0</td>
						</tr>
						<tr>
							<td>Jumlah Pemain</td>
							<td>: 0</td>
						</tr>
						<tr>
							<td>Pemain Asing</td>
							<td>: 0</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="container">
				<div class="container sub-menu">
					<a href="#" class="active">Pemain</a>
					<a href="#">Ofisial</a>
					<a href="#">suporter</a>
				</div>
			</div>
			<div class="container">
				<div class="user-data">
					<div class="subhead">
						<div class="img-radius">
							<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
						</div>
						<b>#1</b>
						<h3>Umuh Muchtar</h3>
						<span>manager</span>
					</div>
					<table>
						<tr>
							<td>kewarganegaraan</td>
							<td>indonesia</td>
						</tr>
						<tr>
							<td>tgl lahir/umur</td>
							<td>lorem ipsum</td>
						</tr>
						<tr>
							<td>lorem ipsum</td>
							<td>lorem ipsum</td>
						</tr>
					</table>
					<a href="">lihat detail pemain</a>
				</div>
			</div>
        </div>
	</div>
        <div class="container box-jadwal" style="position: relative;">
            <h3 id="next_match_klub" class="h3-orange">Jadwal pertandingan <?php echo urldecode($slug);?></h3>
            <i class="material-icons">keyboard_arrow_left</i>
            <i class="material-icons">keyboard_arrow_right</i>
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
            <div class="container over-x" style="margin: 30px 0px">
                <div id="emSlide" class="carousel slide">
                    <div role="listbox" class="carousel-inner w-max">
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
							<div class="box item active">
								<a href="">
									<div class="em-box-content">
										<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
										<h1>lorem ipsum dolor sit</h1>
										<p class="prices">Rp. 500.000</p>
										<button type="text" class="beli">Beli</button>
									</div>
								</a>
								<a href="">
									<div class="em-box-content">
										<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
										<h1>lorem ipsum dolor sit</h1>
										<p class="prices">Rp. 500.000</p>
										<button type="text" class="beli">Beli</button>
									</div>
								</a>
								<a href="">
									<div class="em-box-content">
										<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
										<h1>lorem ipsum dolor sit</h1>
										<p class="prices">Rp. 500.000</p>
										<button type="text" class="beli">Beli</button>
									</div>
								</a>
								<a href="">
									<div class="em-box-content">
										<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
										<h1>lorem ipsum dolor sit</h1>
										<p class="prices">Rp. 500.000</p>
										<button type="text" class="beli">Beli</button>
									</div>
								</a>
								<a href="">
									<div class="em-box-content">
										<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
										<h1>lorem ipsum dolor sit</h1>
										<p class="prices">Rp. 500.000</p>
										<button type="text" class="beli">Beli</button>
									</div>
								</a>
								<a href="">
									<div class="em-box-content">
										<img src="http://www.desktopimages.org/pictures/2014/0118/1/red-smoke-wallpaper-hd-5449.jpg" alt="">
										<h1>lorem ipsum dolor sit</h1>
										<p class="prices">Rp. 500.000</p>
										<button type="text" class="beli">Beli</button>
									</div>
								</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
