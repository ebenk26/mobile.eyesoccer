<?php
    if ($catlist){
	$catlist = json_decode($catlist);
	foreach($catlist->data as $dt)
	{
	    ?>
		<a href="<?php echo $this->library->urltomob($dt->url); ?>">
		    <div class="etube-mobile-thumb">
			<img src="<?php echo $dt->url_pic.'/medium'; ?>" alt="<?php echo $dt->title; ?>">
			<div class="enews-title">
			    <h2><?php echo $dt->title; ?></h2>
			    <span><?php echo date('d M Y H:i:s', strtotime($dt->publish_on)); ?> - <?php echo $dt->news_view; ?> view</span>                
			</div>
		    </div>
		</a>
	    <?php
	}
    }
?>