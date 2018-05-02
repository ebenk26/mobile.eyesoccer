<?php 
	if($eyenews)
	{
		$eyenews = json_decode($eyenews);
?>
		<div class="etube-content pd-t-10">Eyenews</div>
<?php
		foreach($eyenews->data as $dt)
		{
			?>
			<div class="etube-content pd-t-10">
				<a href="<?php echo base_url()?>eyenews/detail/<?php echo $dt->slug?>" title="<?php echo $dt->title;?>">
					<div class="v-etube">
						<img src="<?php echo $dt->url_pic;?>" alt="<?php echo $dt->title;?>">
						<div class="btn-play">
							<img src="<?php echo base_url();?>assets/themes/v1/img/btn-play.png" alt="">
						</div>                    
					</div>
					<h1 style="height: unset;margin-bottom: unset;"><?php echo $dt->title;?></h1>
					<span><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
					<span><?php echo $dt->news_view; ?> view</span>
				</a>
			</div>
<?php
		}
	}
	if($eyetube)
	{
		$eyetube = json_decode($eyetube);
?>
		<div class="etube-content pd-t-10">Eyetube</div>
<?php
		foreach($eyetube->data as $dt)
		{
			?>
			<div class="etube-content pd-t-10">
				<a href="<?php echo base_url()?>eyetube/detail/<?php echo $dt->slug?>" title="<?php echo $dt->title;?>">
					<div class="v-etube">
						<img src="<?php echo $dt->url_thumb;?>" alt="<?php echo $dt->title;?>">
						<div class="btn-play">
							<img src="<?php echo base_url();?>assets/themes/v1/img/btn-play.png" alt="">
						</div>                    
					</div>
					<h1><?php echo $dt->title;?></h1>
					<span><?php echo relative_time($this->library->datenormal($dt->createon)); ?> lalu</span>
					<span><?php echo $dt->tube_view; ?> view</span>
				</a>
			</div>
<?php
		}
	}
	if($player)
	{
		$player = json_decode($player);
?>
		<div class="etube-content pd-t-10">Pemain</div>
<?php
		foreach($player->data as $dt)
		{
			?>
			<div class="etube-content pd-t-10">
				<a href="<?php echo base_url()?>eyeprofile/pemain_detail/<?php echo $dt->slug?>" title="<?php echo $dt->name;?>">
					<div class="v-etube">
						<img src="<?php echo $dt->url_pic;?>" alt="<?php echo $dt->name;?>">
						<div class="btn-play">
							<img src="<?php echo base_url();?>assets/themes/v1/img/btn-play.png" alt="">
						</div>                    
					</div>
					<h1><?php echo $dt->name;?></h1>
					<span>Posisi : <?php echo $dt->position_a?></span>
					<span>Klub : <?php echo $dt->club?></span>
				</a>
			</div>
<?php
		}
	}
	if($club)
	{
		$club = json_decode($club);
?>
		<div class="etube-content pd-t-10">Klub</div>
<?php
		foreach($club->data as $dt)
		{
			?>
			<div class="etube-content pd-t-10">
				<a href="<?php echo base_url()?>eyeprofile/klub_detail/<?php echo $dt->slug?>" title="<?php echo $dt->name;?>">
					<div class="v-etube">
						<img src="<?php echo $dt->url_logo;?>" alt="<?php echo $dt->name;?>">
						<div class="btn-play">
							<img src="<?php echo base_url();?>assets/themes/v1/img/btn-play.png" alt="">
						</div>                    
					</div>
					<h1><?php echo $dt->name;?></h1>
					<span><?php echo $dt->number_of_player?> Pemain</span>
					<span>Tanggal Berdiri : <?php echo $dt->establish_date?></span>
				</a>
			</div>
<?php
		}
	}