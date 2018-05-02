<?php
    if ($newsyoung){
		$newsyoung = json_decode($newsyoung);
		foreach($newsyoung->data as $dt)
		{
?>
			<a href="<?php echo base_url()."eyenews/detail/".$dt->slug;?>">
				<div class="video-thumb">
					<div class="v-thumb-img">
						<img src="<?php echo $dt->url_pic;?>" alt="<?php echo $dt->slug;?>">
					</div>
					<h2><?php echo $dt->title;?></h2>
					<span><?php echo relative_time($this->library->datenormal($dt->createon))." lalu"?></span>
				</div>
			</a>
<?php
		}
    }
?>