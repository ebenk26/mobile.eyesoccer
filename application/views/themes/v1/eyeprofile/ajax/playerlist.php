<?php 
	if($playerlist)
	{
		$default = "http://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/small";
		$playerlist = json_decode($playerlist);
		foreach($playerlist->data as $dt)
		{
			?>
				<a href="<?php echo base_url().'eyeprofile/pemain_detail/'.$dt->slug;?>">
					<div class="user-pemain">
						<div class="pemain-img">
							<img src="<?php echo $this->library->lastext($dt->url_pic,'.') ? $dt->url_pic : $default;?>/small" alt="<?php echo $dt->name;?>" srcset="">
						</div>
						<div class="pemain-data">
							<h3><?php echo $dt->name;?></h3>
							<span><?php echo $dt->club;?> - <?php echo $dt->position_a;?></span>
						</div>
					</div>
				</a>
			<?php 
		}
		
		$playercount = json_decode($playercount)->data;
		// $playercount = json_decode($playercount);
		$pagetotal = ceil($playercount->player_local/10);
		$this->session->set_userdata(array('pagetotalpemain' => $pagetotal));
		if($pagetotal > 1)
		{
			if($this->session->userdata('pagepemain') > 1)
			{
				?>
					<a href='javascript:void(0)' id='reqback' class='form_post' action='eyeprofile'>
						<input type='hidden' name='fn' value='playerlist' class='cinput'>
						<input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
						<input type='hidden' name='paging' value='back' class='cinput'>
						<span><button class="pagination-green-btn" style="float:left;">< Sebelumnya</button></span>
					</a>
				<?php
			}
			
			if($pagetotal > $this->session->userdata('pagepemain')){
				?>
					<a href='javascript:void(0)' id='reqnext' class='form_post' action='eyeprofile'>
						<input type='hidden' name='fn' value='playerlist' class='cinput'>
						<input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
						<input type='hidden' name='paging' value='next' class='cinput'>
						<span><button class="pagination-green-btn" style="float:right;">Selanjutnya ></button></span>
					</a>
				<?php
			}
		}
	}
?>