<?php 
	$folder = $this->config->item('themes');
	if($emoticon)
	{
		$emoticon = json_decode($emoticon);
		$dt = $emoticon->data;
		// print_r ($dt);echo $type;exit();
		if($type == 'proud'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='proud' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bangga.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_proud) ? $dt->news_proud : $dt->tube_proud);?></span>
				<span>bangga</span>
<?php
		}else if($type == 'inspired'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='inspired' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bingung.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_inspired) ? $dt->news_inspired : $dt->tube_inspired);?></span>
				<span>terinspirasi</span>
<?php
		}else if($type == 'happy'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='happy' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/gembira.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_happy) ? $dt->news_happy : $dt->tube_happy);?></span>
				<span>gembira</span>
<?php
		}else if($type == 'sad'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='sad' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/sedih.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_sad) ? $dt->news_sad : $dt->tube_sad);?></span>
				<span>sedih</span>
<?php
		}else if($type == 'angry'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='angry' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/suka.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_angry) ? $dt->news_angry : $dt->tube_angry);?></span>
				<span>marah</span>
<?php
		}else if($type == 'fear'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='fear' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/takut.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_fear) ? $dt->news_fear : $dt->tube_fear);?></span>
				<span>takut</span>
<?php
		}else if($type == 'fun'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='fun' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terhibur.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_fun) ? $dt->news_fun : $dt->tube_fun);?></span>
				<span>terhibur</span>
<?php
		}else if($type == 'shock'){
?>
				<input type='hidden' name='fn' value='set_emot' class='cinput'>
				<input type='hidden' name='channel' value='<?php echo $channel;?>' class='cinput'>
				<input type='hidden' name='type' value='shock' class='cinput'>
				<input type='hidden' name='id' value='<?php echo $dt->id;?>' class='cinput'>
				<div class="img-box">
					<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terkejut.png" alt="">
				</div>
				<span><?php echo (isset($dt->news_shock) ? $dt->news_shock : $dt->tube_shock);?></span>
				<span>terkejut</span>
<?php
		}
	}
?>