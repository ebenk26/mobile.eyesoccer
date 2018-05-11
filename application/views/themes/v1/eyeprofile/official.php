<!-- CONTENT BODY -->
<?php 
$competition = ($this->uri->segment(3) ? urldecode($this->uri->segment(3)) : 'Liga Usia Muda');
$league = ($this->uri->segment(4) ? urldecode($this->uri->segment(4)) : ($this->uri->segment(3) == 'Liga Usia Muda' ? 'Liga Santri Nusantara' : ''));
		$slugnya = urldecode($slug);
	?>
	<!-- CONTENT BODY -->
    <div class="crumb">
		<ul>
			<li><a href="<?php echo base_url();?>" style="display:unset;">Home</a></li>
			<li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Eyeprofile</a></li>
			<li><a href="<?php echo base_url();?>eyeprofile/official/<?php echo $slug?>" style="display:unset;">Ofisial</a></li>
			<li><?php echo urldecode($slug);?></li>
		</ul>
	</div>
<div class="eprofile">
    <div class="head"  style="border-radius: 8px 8px 0px 0px;margin-bottom: 25px;height: 80px;min-height:  unset;">
		<img style="position:  absolute;top:  0px;left:  0px;height:  100%;width:  100%;z-index:  0;box-sizing:  border-box;border-radius: 7px;" class="dncla" src="<?php echo SUBCDN."assets/$folder/img/bannerligausiamudakjbcs.jpg"; ?>" alt="">
			<img style="height: 50px;position:  absolute;top: 0px;left: -15px;" class="dncla" src="http://www.kemenpora.go.id/view/assets/img/Kemenpora2.png" alt="">
			<img style="height: 30px;position:  absolute;top: 8px;right: 10px;" class="dncla" src="https://static.eyesoccer.id/v1/cache/images/1520431772278_logo_eyesoccer.png" alt="">
        <div class="img-radius" style="display:none;">
            <img src="https://www.eyesoccer.id/systems/club_logo/2034LOGO UNTUK APLIKASI.jpg"
                alt="">
        </div>
        <h2 class="h2-text-bottom sdfkjs"><?php echo urldecode($slug);?></h2>
        <!-- <div class="container tab-eprofile">
            <a class="active" href="#content1">Info</a>
        </div> -->
        <!-- <div class="table-scroll" style="height: unset;">
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
                <input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
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
        </div> -->
        <div class="container tab-sub-menu">
					<a href="<?php echo base_url();?>eyeprofile/klub/<?= $slug; ?>" >klub</a>
					<a href="<?php echo base_url();?>eyeprofile/pemain/<?= $slug; ?>" style="border-left: 1px solid;border-right:  1px solid;border-color: white;">pemain</a>
					<a href="<?php echo base_url();?>eyeprofile/official/<?= $slug; ?>" class="active">ofisial</a>
					<!-- <a href="">perangkat pertandingan</a>
					<a href="">supporter</a> -->
				</div>
    </div>
	<!-- <div class="container over-x">
		<div class="container sub-menu w-max">
			<a href="<?php echo base_url();?>eyeprofile/klub/<?= $slug; ?>">klub</a>
			<a href="<?php echo base_url();?>eyeprofile/pemain/<?= $slug; ?>">pemain</a>
			<a href="<?php echo base_url();?>eyeprofile/official/<?= $slug; ?>" class="active">ofisial</a>
			<a href="">perangkat pertandingan</a>
			<a href="">supporter</a>
		</div>
	</div> -->
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
            <input type='hidden' name='slug' value='<?php echo $competition;?>' class='cinput'>
            <input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
            <input type='hidden' name='submenu' value='official' class='cinput'>
            
        </div>
    </div>
    <div class="eprofile-src">
        <input type="text" placeholder="Cari ...">
    </div>
    <div class="container">
            <div class="container table-blue" style="overflow: scroll;height: max-content;">
                <!-- <div class="w-max"> -->
                    <div id="klasemen" class="box-pertandingan klasemen disable-i-style">
                        <div id="reqoffclist" class='loadoffclist' action="eyeprofile" loading="off" clean="clsoffclist">
                            <div id='clsoffclist'>
                                <script>
                                    $(document).ready(function(){
                                        $(window).on('load',function(){
                                            ajaxOnLoad('loadoffclist');
                                        });
                                    });
                                </script>
                            </div>
                            <input type='hidden' name='fn' value='officiallist' class='cinput'>
                            <input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
                            <input type='hidden' name='league' value='<?php echo $league;?>' class='cinput'>
                            <input type='hidden' name='submenu' value='official' class='cinput'>
                            <div class="table-scroll-x" style="border: unset;border-radius: unset;">
                                <table class="table-stripe gr fafa">
                                    <tr>
                                        <th>#</th>
                                        <th>nama</th>
                                        <th>klub</th>
                                        <th>tgl lahir/umur</th>
                                        <th>posisi</th>
                                        <th>kewarganegaraan</th>
                                        <th>bergabung</th>
                                        <th>masa kontrak</th>
                                    </tr>
                                    <tr>
                                        <td>1 <img src="" alt=""></td>
                                        <td>aji santoso</td>
                                        <td><img src="" alt=""></td>
                                        <td>12 mar 1993 (24)</td>
                                        <td>manager</td>
                                        <td>indonesia</td>
                                        <td>7 sep 2017</td>
                                        <td>31 des 2017</td>
                                    </tr>
                                    <tr>
                                        <td>1 <img src="" alt=""></td>
                                        <td>aji santoso</td>
                                        <td><img src="" alt=""></td>
                                        <td>12 mar 1993 (24)</td>
                                        <td>manager</td>
                                        <td>indonesia</td>
                                        <td>7 sep 2017</td>
                                        <td>-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
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
    }
    if(res[res.length-2] == "Liga%20Usia%20Muda"){
        $(".sbpbtn").show();
        $(".dncla").show();
    }
    if(res[res.length-1] == "Liga%20Usia%20Muda"){
        sdfkjs.classList.add("slfdh");
    }
	if($( ".sdfkjs" ).html() == "Liga Usia Muda"){
		$(".sbpbtn").show();
		$(".dncla").show();
        sdfkjs.classList.add("slwa");
	}
</script>