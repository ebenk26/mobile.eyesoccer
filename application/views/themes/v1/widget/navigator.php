<nav>
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
<!-- Link download berikut dibuat kondisi, jika device yg open iphone maka link nya ke apple store jika yg open device android
maka link ke playstore, selain dua device tersebut maka button display none. dan dibuat cache jika button di close maka tetap
tidak tampil walaupun di refresh agar tidak terlalu mengganggu -->
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