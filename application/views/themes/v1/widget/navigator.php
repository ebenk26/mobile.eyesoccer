<nav class="nav-mobile-width">
    <i id="menu" class="material-icons f-l">menu</i>
    <a href="<?= base_url(); ?>">
	<img src="<?= base_url(); ?>assets/img/logo.png" alt="">
    </a>
    <!-- <a class="nav-link" href="<?= base_url() ?>eyemarket/keranjang/">
        <img src="<?=base_url()?>assets/eyemarket/user/images/icons/keranjang.png" alt="">
    </a> -->
    <?php 

    	if($this->uri->segment(1) == 'eyeme' ){

    		if(!$this->session->member){
    			echo '<i class="material-icons f-r" onclick="xdir()">input</i>';
    		}


    	}
    	else{
			echo loginAvaTop($this->session->member);
    	}

    ?>
    
</nav>
<nav class="nav-full-width">
	<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/logo.png" alt="" style="float:  left;margin:  -4px 20px; 0px"></a>
	<div class="fwmenu">
		<a href="<?= base_url(); ?>eyeprofile/klub">Eye Profile</a>
		<a href="<?= base_url(); ?>eyetube">Eye Tube</a>
		<a href="<?= base_url(); ?>eyenews">Eye News</a>
		<a href="<?= base_url(); ?>eyeme">Eye Me</a>
		<a href="<?= base_url(); ?>eyemarket">Eye Market</a>
		<a href="<?= base_url(); ?>eyevent">Eye Vent</a>
	</div>
    <?php
	if($this->session->member){
	?>
		<a href="<?= base_url(); ?>member/logout">Keluar</a>
    <?php
	}
	?>
	<?php 

	if($this->uri->segment(1) == 'eyeme' ){

		if(!$this->session->member){
			echo '<i class="material-icons f-r" onclick="xdir()">input</i>';
		}


	}
	else{
		echo loginAvaTop($this->session->member);
	}

	?>
</nav>

<div class="dbcls">
	<div class="dbcls-box">
		<a class="linkdbcls" href="">
		<div class="db-section">
			<div class="db-img-box">
				<img src="http://static.eyesoccer.id/v1/cache/images/4033LOGO%20UNTUK%20APLIKASI.jpg" alt="">
			</div>
		</div>
		<div class="db-section">
			<span>Dapatkan Info Terbaru dari kami. yuk download Eyesoccer Apps</span>
		</div>
		</a>
		<i id="dbcls" class="material-icons">clear</i>
	</div>
</div>