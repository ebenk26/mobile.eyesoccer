<?php
    if ($homenewslist){
	$homenewslist = json_decode($homenewslist);
	$i = 1;
	$n = 0;
	foreach($homenewslist->data as $dt)
	{
		if($i == 1){
		?>
		<div class="container">
			<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
				<div class="container" style="margin-bottom: -40px;">
					<div class="v-eyetube" style="position:  relative;">
						<span class="hl">headline</span>
						<img style="z-index:  unset;" src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
					</div>
					<span class="no-border" style="padding-bottom: 0;margin-bottom: 0;margin-top: 0px;bottom: 82px;font-size: .6em;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
					<h1 style="padding-top: 0;margin-top: -40px;bottom: 40px; height: unset; overflow: unset;"><?php echo $dt->title; ?></h1>
				</div>
			</a>
		</div>
			
			<div class="container news-headline" style="margin-bottom: unset;top: unset;">
				<ul>
		<?php
		}else if($i == 2 || $i == 3 || $i == 4){
		?>
					<li><a href="<?php echo $this->library->urltomob($dt->url); ?>"><p><?php echo $dt->title; ?></p></a></li>
		<?php
			if($i == 4){
		?>
				</ul> 
			</div>
			<span id='tab-populer' class="orange-active tab-popular-custom-home no-border" active="true" style="bottom: 0px;display: block !important;width:  100%;float:  left;margin: 10px 20px !important;font-size: 1em !important;color: #eb554c !important;padding:  unset;box-sizing:  border-box;">Terkini</span>
		</div>
		<?php
			}
		}else{
		?>
			<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
				<div class="rek-ber-c" style="height: 90px;">
					<div class="img-res-height" style="margin-top: 0;">
					<img style="margin: 0px;" src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
					</div>
					<label style="font-size: .55em;color: gray;font-weight: 500;margin: unset;display: block;font-family: 'Roboto', sans-serif;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</label>
					<label style="font-size: .8em;font-weight: 500;margin-top: 1px;height: 30px;overflow: hidden;color: #333;display: block;font-family: 'Roboto', sans-serif;"><?php echo $dt->title; ?></label>
					<p style="float: left;"><?php echo word_limiter($dt->description,15); ?></p>
				</div>
			</a>
		<?php
		}
		$i++;
	}
    }
?>