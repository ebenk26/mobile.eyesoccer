<?php 
$competition = ($this->uri->segment(3) ? urldecode($this->uri->segment(3)) : 'Liga Usia Muda');
$league = ($this->uri->segment(4) ? urldecode($this->uri->segment(4)) : ($this->uri->segment(3) == 'Liga Usia Muda' ? 'Liga Santri Nusantara' : ''));?>
	<!-- CONTENT BODY -->
    <div class="crumb">
            <ul>
                <li><a href="<?php echo base_url();?>" style="display:unset;">Home</a></li>
                <li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Eyeprofile</a></li>
                <li><a href="<?php echo base_url();?>eyeprofile/pemain" style="display:unset;">Pemain</a></li>
                <li><?php echo $competition;?></li>
            </ul>
        </div>
    <div class="eprofile">
		<div class="head" style="border-radius: 8px 8px 0px 0px;margin-bottom: 25px;height: 80px;min-height:  unset;">
			<img style="position:  absolute;top:  0px;left:  0px;height:  100%;width:  100%;z-index:  0;box-sizing:  border-box;border-radius: 7px;" class="dncla" src="<?php echo SUBCDN."assets/$folder/img/bannerligausiamudakjbcs.jpg"; ?>" alt="">
			<img style="height: 50px;position:  absolute;top: 0px;left: -15px;" class="dncla" src="http://www.kemenpora.go.id/view/assets/img/Kemenpora2.png" alt="">
			<img style="height: 30px;position:  absolute;top: 8px;right: 10px;" class="dncla" src="https://static.eyesoccer.id/v1/cache/images/1520431772278_logo_eyesoccer.png" alt="">
            <div class="img-radius" style="display:none;">
                <img src="https://www.eyesoccer.id/systems/club_logo/2034LOGO UNTUK APLIKASI.jpg"
                    alt="">
            </div>
            <h2 class="h2-text-bottom sdfkjs"><?php echo $competition;?></h2>
           
			<div class="container tab-sub-menu">
					<a href="<?php echo base_url();?>eyeprofile/klub/<?php echo $competition ?>">klub</a>
					<a href="<?php echo base_url();?>eyeprofile/pemain/<?php echo $competition ?>" style="border-left: 1px solid;border-right:  1px solid;border-color: white;" class="active">pemain</a>
					<a href="<?php echo base_url();?>eyeprofile/official/<?php echo $competition ?>">ofisial</a>
				
				</div>
        </div>
       
        <div class="container" style="font-size: .8em;">
			<div id="reqcompetition" class='loadcompetition' action="eyeprofile" loading="off" clean="clscompetition">
				<div id='clscompetition'>
					<script>
						$(document).ready(function(){
							$(window).on('load',function(){
								ajaxOnLoad('loadcompetition');
							});
						});
					</script>
				</div>
				<input type='hidden' name='fn' value='competition' class='cinput'>
				<input type='hidden' name='submenu' value='pemain' class='cinput'>
				<input type='hidden' name='slug' value='<?php echo $competition;?>' class='cinput'>
					<input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
				
			</div>
        </div>
        <div class="eprofile-src" style="display:none;">
            <input type="text" placeholder="Cari ...">
        </div>
        <div class="container list-pemain">
			<div id="reqplayerlist" class='loadplayerlist' action="eyeprofile" loading="off" clean="clsplayerlist">
				<div id='clsplayerlist'>
					<script>
						$(document).ready(function(){
							$(window).on('load',function(){
								ajaxOnLoad('loadplayerlist');
							});
						});
					</script>
				</div>
				<input type='hidden' name='fn' value='playerlist' class='cinput'>
				<input type='hidden' name='slug' value='<?php echo $competition;?>' class='cinput'>
				<input type='hidden' name='submenu' value='pemain' class='cinput'>
				<input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
				<div class="container">
                    <div class="user-pemain">
                        <div class="gr pemain-img">				
                        </div>
                        <div class="pemain-data">		
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                        </div>
                    </div>
                    <div class="user-pemain">
                        <div class="gr pemain-img">				
                        </div>
                        <div class="pemain-data">		
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                        </div>
                    </div>
                    <div class="user-pemain">
                        <div class="gr pemain-img">				
                        </div>
                        <div class="pemain-data">		
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                        </div>
                    </div>
                    <div class="user-pemain">
                        <div class="gr pemain-img">				
                        </div>
                        <div class="pemain-data">		
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                        </div>
                    </div>
                    <div class="user-pemain">
                        <div class="gr pemain-img">				
                        </div>
                        <div class="pemain-data">		
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                            <span class="gr">SSB NOSTALGIA ACADEMY LOADWRI (KOKAR) - Sayap Kiri</span>
                        </div>
                    </div>
                </div>
			</div>
        </div>
        <div class="container box-jadwal" style="position: relative;">
            <h3 class="h3-orange">Jadwal pertandingan <?php echo $competition;?></h3>
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
					<input type='hidden' name='slug' value='<?php echo $competition;?>' class='cinput'>
					<input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
					<div class="jadwal-content fafa gr">
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
					<div class="jadwal-content fafa gr">
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
					<div class="custom-select" style="width:200px;">
                    <select id="" name="" selected="true" class="slc-musim">
                        <option value="">2017</option>
                        <option value="">2017</option>
                        <option value="">2017</option>
                        <option value="">2017</option>
					</select>
						</div>
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
						</div>
                    </div>
                </div>
            </div>
    </div>
<script>
		var buttonOpen = document.getElementsByClassName("button-open")[0];
		var hd = document.getElementsByClassName("head")[0];
		var sdfkjs = document.getElementsByClassName("sdfkjs")[0];
		// window.onload = function(){
		// buttonOpen.style.width = "200px";
		// buttonOpen.style.height = "unset";
		// buttonOpen.style.padding = "10px";
		// }
		
		var str = window.location.href;
		var res = str.split("/");
		if(res[res.length-1] != "Liga%20Usia%20Muda"){
			$(".sbpbtn").hide();
			$(".dncla").hide();
			sdfkjs.classList.add("slwa");
		}
		if(res[res.length-2] == "Liga%20Usia%20Muda"){
			$(".sbpbtn").show();
			$(".dncla").show();
			sdfkjs.classList.add("slwa");
		}
		if(res[res.length-1] == "Liga%20Usia%20Muda"){
			sdfkjs.classList.add("slfdh");
			sdfkjs.classList.add("slwa");
		}
	</script>
