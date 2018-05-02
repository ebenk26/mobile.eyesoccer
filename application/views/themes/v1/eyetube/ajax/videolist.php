<?php
if ($tube){
	$tube = json_decode($tube);
	foreach($tube->data as $dt)
	{
?>
		<a href="<?php echo base_url();?>eyetube/detail/<?= $dt->slug; ?>">
			<div class="video-thumb">
				<div class="v-thumb-img">
					<img src="<?= $dt->url_thumb; ?>" alt="<?= $dt->title; ?>">
				</div>
				<h2><?php echo $dt->title;?></h2>
				<span><?php echo relative_time($this->library->datenormal($dt->createon)); ?> lalu - <?= $dt->tube_view; ?> view</span>
			</div>
		</a>
<?php
	}
}
?>