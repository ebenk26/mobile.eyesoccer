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
				<div class="container" style="margin-bottom: -20px;">
					<div class="v-eyetube" style="position:  relative;">
						<span class="hl">headline</span>
						<img src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
					</div>
					<span style="padding-bottom: 0;margin-bottom: 0;margin-top: 0px;bottom: 82px;font-size: .6em;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</span>
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
			<span id='tab-populer' class="orange-active tab-popular-custom-home" active="true" style="bottom: 0px;">Terkini</span>
		</div>
		<?php
			}
		}else{
		?>
			<a href="<?php echo $this->library->urltomob($dt->url); ?>" title="<?php echo $dt->title; ?>">
				<div class="rek-ber-c" style="height: 90px;margin: 15px 0px;">
					<div class="img-res-height" style="margin-top: 0;">
					<img style="margin: 0px;" src="<?php echo $dt->url_pic; ?>" alt="<?php echo $dt->title; ?>">
					</div>
					<label style="font-size: .65em;color: gray;font-weight: 500;margin: unset;display: block;"><?php echo relative_time($this->library->datenormal($dt->publish_on)); ?> lalu</label>
					<label style="line-height: 1.4em;font-size: .7em;font-weight: 500;margin-top: 1px;height: 29px;overflow: hidden;color: #212121;display: block;"><?php echo $dt->title; ?></label>
					<p style="float: left;"><?php echo word_limiter($dt->description,15); ?></p>
				</div>
			</a>
		<?php
		}
		$i++;
	}
    }
?>