<!-- CONTENT BODY -->
<?php 
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
					<a href="<?php echo base_url();?>eyeprofile/klub" >info</a>
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
            <input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
            <input type='hidden' name='submenu' value='official' class='cinput'>
            <select id="" name="" selected="true" class="slc-musim">
                <option value="">Liga 1 Indonesia</option>
                <option value="">Liga 1 Indonesia</option>
                <option value="">Liga 1 Indonesia</option>
                <option value="">Liga 1 Indonesia</option>
            </select>
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
                            <input type='hidden' name='submenu' value='klub' class='cinput'>
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