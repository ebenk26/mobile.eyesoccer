<?php
$competition = ($this->uri->segment(3) ? urldecode($this->uri->segment(3)) : 'Liga Usia Muda');
$league = ($this->uri->segment(4) ? urldecode($this->uri->segment(4)) : ($this->uri->segment(3) == 'Liga Usia Muda' ? 'Liga Santri Nusantara' : ''));?>
	<!-- CONTENT BODY -->
    <div class="crumb">
            <ul>
                <li><a href="<?php echo base_url();?>" style="display:unset;">Home</a></li>
                <li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Eyeprofile</a></li>
                <li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Klub</a></li>
                <li><?php echo $competition;?></li>
            </ul>
        </div>
    <div class="eprofile">
		<div class="head" style="border-radius: 8px 8px 0px 0px;margin-bottom: 25px;height: 80px;min-height:  unset;">
            <!-- <div class="img-radius" style="display:none;">
                <img src=""
                    alt="">
			</div> -->
			<img style="position:  absolute;top:  0px;left:  0px;height:  100%;width:  100%;z-index:  0;box-sizing:  border-box;border-radius: 7px;" class="dncla" src="<?php echo SUBCDN."assets/$folder/img/bannerligausiamudakjbcs.jpg"; ?>" alt="">
			<img style="height: 50px;position:  absolute;top: 0px;left: -15px;" class="dncla" src="http://www.kemenpora.go.id/view/assets/img/Kemenpora2.png" alt="">
			<img style="height: 30px;position:  absolute;top: 8px;right: 10px;" class="dncla" src="https://static.eyesoccer.id/v1/cache/images/1520431772278_logo_eyesoccer.png" alt="">
			<a href="<?php echo ($this->session->member ? base_url().'member/regis_klub' : base_url().'member/?from=member/regis_klub')?>"><span class="button-open sbpbtn">Pendaftaran SSB</span></a>
            <h2 class="h2-text-bottom sdfkjs"><?php echo $competition;?></h2>
            <!-- <div class="container tab-eprofile">
                <a class="active" href="#content1">Info</a>
            </div> -->
			<div class="container tab-sub-menu">
					<a href="<?php echo base_url();?>eyeprofile/klub" class="active">Klub</a>
					<a href="<?php echo base_url();?>eyeprofile/pemain/<?= $competition; ?>" style="border-left: 1px solid;border-right:  1px solid;border-color: white;">pemain</a>
					<a href="<?php echo base_url();?>eyeprofile/official/<?= $competition; ?>">ofisial</a>
					<!-- <a href="">perangkat pertandingan</a>
					<a href="">supporter</a> -->
				</div>
        </div>
        
        <!-- <div class="container over-x">
            <div class="container sub-menu w-max">
                <a href="<?php echo base_url();?>eyeprofile/klub" class="active">klub</a>
                <a href="<?php echo base_url();?>eyeprofile/pemain/<?= $slug; ?>">pemain</a>
                <a href="<?php echo base_url();?>eyeprofile/official/<?= $slug; ?>">ofisial</a>
                <a href="">perangkat pertandingan</a>
                <a href="">supporter</a>
            </div>
		</div> -->

		<div class="table-scroll" style="height: unset;margin: 20px 0px 15px;">
			<div id="reqdescleague" class='loadclubcount' action="eyeprofile" loading="off" clean="clsclubcount">
				<div id='clsclubcount'>
					<script>
						$(document).ready(function(){
							$(window).on('load',function(){
								ajaxOnLoad('loadclubcount');
							});
						});
					</script>
				</div>
				<input type='hidden' name='fn' value='desc_league' class='cinput'>
				<input type='hidden' name='submenu' value='klub' class='cinput'>
				<input type='hidden' name='slug' value='<?php echo $competition;?>' class='cinput'>
				<input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
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
				<input type='hidden' name='submenu' value='klub' class='cinput'>
				<input type='hidden' name='slug' value='<?php echo $competition;?>' class='cinput'>
				<input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
				<!-- <select id="" name="" selected="true" class="slc-musim">
					<option value>--Pilih Liga--</option>
					<option value="">Liga 1 Indonesia</option>
					<option value="">Liga 1 Indonesia</option>
					<option value="">Liga 1 Indonesia</option>
				</select> -->
			</div>
        </div>
        <div class="container eprofile-klub-home">
			<div id="reqklublist" class='loadklublist' action="eyeprofile" loading="off" clean="clsklublist">
					<div id='clsklublist'>
						<script>
							$(document).ready(function(){
								$(window).on('load',function(){
									ajaxOnLoad('loadklublist');
								});
							});
						</script>
					</div>
					<input type='hidden' name='fn' value='klublist' class='cinput'>
					<input type='hidden' name='slug' value='<?php echo $competition;?>' class='cinput'>
				<input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
					<input type='hidden' name='submenu' value='klub' class='cinput'>
				<div class="klub-content">
					<div class="img-klub-content gr">
						<img src="" alt="" srcset="">
					</div>
					<h3 class="nama-klub gr">Nama Klub</h3>
				</div>
				<div class="klub-content">
					<div class="img-klub-content gr">
						<img src="" alt="" srcset="">
					</div>
					<h3 class="nama-klub gr">Nama Klub</h3>
				</div>
				<div class="klub-content">
					<div class="img-klub-content gr">
						<img src="" alt="" srcset="">
					</div>
					<h3 class="nama-klub gr">Nama Klub</h3>
				</div>
				<div class="klub-content">
					<div class="img-klub-content gr">
						<img src="" alt="" srcset="">
					</div>
					<h3 class="nama-klub gr">Nama Klub</h3>
				</div>
			</div>
        </div>
        <div class="container box-jadwal" style="position: relative;">
            <h3 class="h3-orange">Hasil Liga Indonesia 1</h3>
			<hr width="100%">
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
					<div class="jadwal-content gr">
						<table>
								<tr>
									<td class="gr">22 Okt</td>
									<td class="gr">08:45</td>
								</tr>
								<tr>
									<td class="gr">Perseru Serui</td>
									<td class="gr">2</td>
								</tr>
								<tr>
									<td class="gr">Persipura</td>
									<td class="gr">2</td>
								</tr>
						</table>
					</div>
					<div class="jadwal-content gr">
						<table>
							<tr>
								<td class="red gr">22 Okt</td>
								<td  class="gr">08:45</td>
							</tr>
							<tr>
								<td class="gr">Perseru Serui</td>
								<td class="gr">2</td>
							</tr>
							<tr>
								<td class="gr">Persipura</td>
								<td class="gr">2</td>
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
                <!-- <div class="container table-blue" style="overflow: scroll;height: 250px;">
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
                                    <td><img  class="fafa" src="" alt=""></td>
                                    <td><img class="fafa" src="" alt=""></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>raphael <span>gelandang tengah</span></td>
                                    <td>33</td>
                                    <td><img class="fafa" src="" alt=""></td>
                                    <td><img class="fafa" src="" alt=""></td>
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
                                    <td style="min-width: 100px;"><img src="" alt=""> arema FC</td>
                                    <td>3234230</td>
                                    <td>1134125</td>
                                    <td>91234123</td>
                                    <td>6123414</td>
                                    <td>31234124</td>
                                    <td>312341233</td>
                                </tr>
                                <tr>
                                    <td>9<i class="material-icons red">arrow_drop_down</i></td>
                                    <td style="min-width: 100px;"><img src="" alt=""> arema FC</td>
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
                </div> -->
            </div>
            <div class="container over-x" style="margin: 30px 0px">
			<a href="<?= base_url(); ?>eyemarket">
                <div id="emSlide" class="carousel slide">
                    <div role="listbox" class="carousel-inner w-max">
						<a href="<?= base_url(); ?>eyemarket">
							<div id="emSlide" class="carousel slide">
							<div role="listbox" class="carousel-inner w-max">
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
                        </div>
                    </div>
                </div>
			</div>
			<div class="section-box-popup">
				<div class="box-popup">
				<i class="material-icons sbpclose to-close">clear</i>
						<div class="container data-profil mt20">
							<table>
								<tbody><tr>
									<td>Nama Klub</td>
									<td>
										<input type="text">
									</td>
								</tr>
								<tr>
									<td>Julukan</td>
									<td>
										<input type="text">
									</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>
										<input type="text">
									</td>
								</tr>
								<tr>
									<td>No HP</td>
									<td>
										<input type="text">
									</td>
								</tr>
								<tr>
									<td>Alamat Sekertariat</td>
									<td>
										<input type="text">
									</td>
								</tr>
								<tr>
									<td>Identitas Pemilik</td>
									<td>
										<input type="file">
									</td>
								</tr>
							</tbody></table>
						</div>
						<div class="tx-c">
							<button class="klik-dsn" style="font-size:.85em;">DAFTAR</button>
						</div>
					</div></div>
					<script>
						var buttonOpen = document.getElementsByClassName("button-open")[0];
						var hd = document.getElementsByClassName("head")[0];
						var sdfkjs = document.getElementsByClassName("sdfkjs")[0];
						
						// window.onload = function(){
						buttonOpen.style.width = "200px";
						buttonOpen.style.height = "unset";
						buttonOpen.style.padding = "10px";
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
						if($( ".sdfkjs" ).html() == "Liga Usia Muda"){
							$(".sbpbtn").show();
							$(".dncla").show();
							sdfkjs.classList.add("slwa");
						}
						$("#lsdaol").hide();
					</script>
    </div>
  