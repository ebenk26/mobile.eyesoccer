<!-- SEARCHBOX -->
<div id="srcbox" class="searchbox">
	<input class="input_search" type="search" name="search" placeholder="cari apa hari ini?"><button id="srcSub" type="button"><a onclick="Search()">Cari</a></button>
	
	<div class="close"></div>
</div>

<!-- MENU -->
<div id="xMenu" class="menu">
    <div class="m-top">
        <span class="m-log" href="#"><i class="material-icons xClose">clear</i></span>
        <?php 
        echo loginBtn($this->session->member)?>
       
    </div>
    <span>kanal</span>
    <a href="<?= base_url(); ?>eyeprofile/klub"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyeprofile.png" alt="">Eye Profile</a>
    <a href="<?= base_url(); ?>eyetube"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyetube.png" alt="">Eye Tube</a>
    <a href="<?= base_url(); ?>eyenews"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyenews.png" alt="">Eye News</a>
    <a href="<?= base_url(); ?>eyeme"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic-eyeme.png" alt="">Eye Me</a>
    <a href="<?= base_url(); ?>eyemarket"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyemarket.png" alt="">Eye Market</a>
    <a href="<?= base_url(); ?>eyevent"><img src="<?php echo SUBCDN."assets/$folder"; ?>img/ic_eyevent.png" alt="">Eye Vent</a>
    <?php
	if($this->session->member){
	?>
		<a href="<?= base_url(); ?>member/logout">Keluar</a>
    <?php
	}
	switch($kanal)
	{
	    case 'eyenews':
		?>
			<div class="menu-ketegori">
			<span>kategori</span>
		    <div id="reqcat" class='loadcat' action="eyenews" loading="off" clean="clscat">
			<div id='clscat'>
			    <script>
				$(document).ready(function(){
				    $(window).on('load',function(){
					ajaxOnLoad('loadcat');
				    });
				});
			    </script>
			</div>
			<input type='hidden' name='fn' value='newscat' class='cinput'>
			<a href="enews-kategori.html">LIGA</a>
			<a href="enews-kategori.html">PEMBINAAN</a>
			<a href="enews-kategori.html">UMPAN LAMBUNG</a>
			<a href="enews-kategori.html">PREDIKSI</a>
			<a href="enews-kategori.html">PERISTIWA</a>
			<a href="enews-kategori.html">SOCCER SAINS</a>
			<a href="enews-kategori.html">ULAS TUNTAS</a>
			<a href="enews-kategori.html">SOCCER SERI</a>
			<a href="enews-kategori.html">PINGGIR LAPANGAN</a>
			</div>
			</div>
		<?php
	    break;
	    
	    case 'eyetube':
		?>
			<div class="menu-ketegori">
		    <span>kategori</span>
		    <a href="<?= base_url(); ?>eyetube/kategori/EyeSoccer-Fact">EYESOCCER FACT</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Flash">EYESOCCER FLASH</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/Eyesoccerpedia">EYESOCCER PEDIA</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/Match-Preview">MATCH PREVIEW</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Hits">EYESOCCER HITS</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/Profile-SSB">PROFILE SSB</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/Eyesoccer-Star">EYESOCCER STAR</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Funny">EYESOCCER FUNNY</a>
		    <a href="<?= base_url(); ?>eyetube/kategori/VIDEO-KAMU">VIDEO KAMU</a>
			<a href="<?= base_url(); ?>eyetube/kategori/Highlight">HIGHLIGHT</a>
			</div>
		<?php
	    break;
	}
    ?>
</div>
<script>
	function Search(){
		location.href = '<?php echo base_url()?>home/search?q='+$('.input_search').val()+'';
	}
	$('.input_search').bind("enterKey",function(e){
	   Search();
	});
	$('.input_search').keyup(function(e){
		if(e.keyCode == 13)
		{
			$(this).trigger("enterKey");
		}
	});
</script>