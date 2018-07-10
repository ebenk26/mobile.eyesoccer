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
                            <div class="container" style="border: unset;border-radius: unset;">
                                    <div class="x-form-daftar-pemain row" style="margin:2px 2px 10px !important; background-color:#fafafa;">
                                        <a href="" class="container">
                                            <div class="col-xs-4 edits">
                                                <div class="img-round" style="background-color: #f5f5f5;">
                                                    <img src="" alt="" style="max-width:unset; max-height:unset;">
                                                </div>
                                            </div>
                                            <div class="col-xs-8 pd-t-19 edits dftr-pemain tx-r" style="padding: 8px 0;">
                                                <span class="mh-unset gr">ANTON S.PD</span>
                                                <span class="mh-unset gr">(Klub)</span>
                                                <span class="mh-unset gr">PELATIH</span>
                                            </div>
                                        </a>
                                    </div>          
                                    <div class="x-form-daftar-pemain row" style="margin:2px 2px 10px !important; background-color:#fafafa;">
                                        <a href="" class="container">
                                            <div class="col-xs-4 edits">
                                                <div class="img-round" style="background-color: #f5f5f5;">
                                                    <img src="" alt="" style="max-width:unset; max-height:unset;">
                                                </div>
                                            </div>
                                            <div class="col-xs-8 pd-t-19 edits dftr-pemain tx-r" style="padding: 8px 0;">
                                                <span class="mh-unset gr">ANTON S.PD</span>
                                                <span class="mh-unset gr">(Klub)</span>
                                                <span class="mh-unset gr">PELATIH</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="x-form-daftar-pemain row" style="margin:2px 2px 10px !important; background-color:#fafafa;">
                                        <a href="" class="container">
                                            <div class="col-xs-4 edits">
                                                <div class="img-round" style="background-color: #f5f5f5;">
                                                    <img src="" alt="" style="max-width:unset; max-height:unset;">
                                                </div>
                                            </div>
                                            <div class="col-xs-8 pd-t-19 edits dftr-pemain tx-r" style="padding: 8px 0;">
                                                <span class="mh-unset gr">ANTON S.PD</span>
                                                <span class="mh-unset gr">(Klub)</span>
                                                <span class="mh-unset gr">PELATIH</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="x-form-daftar-pemain row" style="margin:2px 2px 10px !important; background-color:#fafafa;">
                                        <a href="" class="container">
                                            <div class="col-xs-4 edits">
                                                <div class="img-round" style="background-color: #f5f5f5;">
                                                    <img src="" alt="" style="max-width:unset; max-height:unset;">
                                                </div>
                                            </div>
                                            <div class="col-xs-8 pd-t-19 edits dftr-pemain tx-r" style="padding: 8px 0;">
                                                <span class="mh-unset gr">ANTON S.PD</span>
                                                <span class="mh-unset gr">(Klub)</span>
                                                <span class="mh-unset gr">PELATIH</span>
                                            </div>
                                        </a>
                                    </div>
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
</script>