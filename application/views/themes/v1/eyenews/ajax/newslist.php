<?php
if ($newslist){
	$newslist = json_decode($newslist);
	foreach($newslist->data as $dt)
	{
?>
	<a href="<?php echo $this->library->urltomob($dt->url);?>">
		<div class="etube-content etube-content-detail pd-t-10">
			<div class="v-etube v-etube-detail">
				<img src="<?php echo $dt->url_pic.'/small';?>" alt="">
			</div>
			<h1><?php echo $dt->title;?></h1>
			<span><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
			<span><?php echo $dt->news_view; ?> view</span>
		</div>
	</a>
<?php
	}
}
	if(count($newslist->data)>0){
	?>
	<img style="width: 40%; margin-left: 30%;" class="load-gif loadhide" src="<?php echo base_url();?>assets/img/loadingsoccer.gif" alt="Loading">
	<?php 
	}
?>