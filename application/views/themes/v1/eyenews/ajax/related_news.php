<?php
if ($newsdetail){
	$newsdetail = json_decode($newsdetail);
	foreach($newsdetail->data->related_news as $dt)
	{
		if($dt->id != $news_id->data->id){
?>
			<a href="<?php echo $this->library->urltomob($dt->url);?>">
				<div class="etube-content etube-content-detail pd-t-10">
					<div class="v-etube v-etube-detail v-etube-res">
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
}
?>
<img style="width: 40%; margin-left: 30%;" class="load-gif loadhide" src="<?php echo base_url();?>assets/img/loadingsoccer.gif" alt="Loading">
<div  id="reqnewslist" class='loadnewslist' action="eyenews" loading="off" wait>
	<input type="hidden" name="fn" value="related_news" class="cinput">
	<input type="hidden" name="sess"  class="cinput" id="pg" value="true"> 
	<input type="hidden" name="cat" class="cinput" id="cat">
</div>

<script>
	$(window).scroll(function() {
		if($(window).scrollTop() >= $(document).height()/2 + $(document).height()/4) {
			$('.loading').show();
			$('#cat').val($("#catews").val());
			ajaxOnLoad('loadnewslist');
		}
	})
</script>