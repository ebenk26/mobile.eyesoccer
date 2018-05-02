<?php
	if ($list)
	{
		$list = json_decode($list);
		$awal = json_decode($awal);
		$eyenews_ads = json_decode($eyenews_ads);
		$i = 1;

		foreach ($awal->data as $value)
		{
?>
			<a href="<?php echo base_url()."eyenews/detail/".$value->slug;?>">
				<div class="container eyetube etube-res" style="height: 185px;">
					<div class="v-eyetube" style="height: 185px; position: relative;">
                        <span class="hl">headline</span>
						<img src="<?php echo $value->url_pic;?>" alt="">
					</div>
					<span style="bottom: 75px;"><?php echo relative_time($this->library->datenormal($value->createon))." lalu"?></span>
					<h1  style="bottom: 70px;height: unset;"><?php echo $value->title;?></h1>
				</div>
			</a>
			<div class="container news-headline" style="margin-bottom: 10px;top: unset;">
				<ul>
					<?php 
						foreach ($list->data as $ls)
						{
					?>
							<li> 
								<a href="<?php echo base_url()."eyenews/detail/".$ls->slug;?>"> 
									<p><?php echo $ls->title;?></p> 
								</a> 
							</li>
					<?php 
						}
					?>
				</ul>
			</div>
			<span id='tab-populer' class="orange-active" active="true" style="bottom: 0;color: #FF5722;margin: 5px;font-weight: 600;">Terkini</span>
<?php
			break;
		}
?>
		<div class="container rek-ber" style="padding: 1%;">
<?php
		foreach ($awal->data as $value)
		{
			if ($i != 1)
			{
?>
					<a href="<?php echo $this->library->urltomob($value->url); ?>" title="<?php echo $value->title; ?>">
							
							<div class="rek-ber-c" style="height: 90px;margin: 15px 0px;">
                                <div class="img-res-height" style="margin-top: 0;">
                                    <img src="<?php echo $value->url_pic . '/small'; ?>" alt="<?php echo $value->title; ?>">
                                </div>
                                <span><?php echo date('d M Y H:i:s', strtotime($value->publish_on)); ?></span>
                                <h1><?php echo $value->title; ?></h1>
                                <?php echo word_limiter($value->description, 10); ?>
                            </div>
					</a>
<?php				
			}
			$i++;	
		}
		
		foreach ($eyenews_ads->data as $value)
		{
			if ($i != 1)
			{
?>
					<a href="<?php echo $this->library->urltomob($value->url); ?>" title="<?php echo $value->title; ?>">
							
							<div class="rek-ber-c" style="height: 90px;margin: 15px 0px;">
                                <div class="img-res-height" style="margin-top: 0;">
                                    <img src="<?php echo $value->url_pic . '/small'; ?>" alt="<?php echo $value->title; ?>">
                                </div>
                                <span><?php echo date('d M Y H:i:s', strtotime($value->publish_on)); ?></span>
                                <h1><?php echo $value->title; ?></h1>
								<span style="font-weight: 600;font-size: .7em;position: relative;top: 21px;">Tulisan Kamu</span>
                            </div>
					</a>
<?php				
			}
			$i++;	
		}
?>
		</div>
<?php
	}
?>