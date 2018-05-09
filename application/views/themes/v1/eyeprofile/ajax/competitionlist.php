<select name="competition" class="comp">
<?php foreach($competition as $c):?>
	<option <?php echo ($slug == $c->competition ? 'selected' : '' )?> value="<?php echo  $c->competition?>"><?php echo $c->competition?></option>
	
<?php endforeach;?>
</select>
<select name="league" class="league" <?php echo ($slug != 'Liga Usia Muda' ? 'style="display:none"': '')?>>
	<option>--Pilih Category Liga--</option>
<?php foreach($league as $l): echo $slug_league;?>
	
		<option <?php echo ($slug_league == $l->league ? 'selected' : '')?> value="<?php echo  $l->league?>"><?php echo $l->league?></option>
		
<?php endforeach;?>
</select>
<script>
	var baseUrl = '<?php echo base_url().'eyeprofile/'.$submenu.'/'?>';
	var valcompetition = '';
	$('.comp').on('change',function(){	
		if($(this).val() == 'Liga Usia Muda'){
			$('.league').show();
		}
		else{location.href = baseUrl + $(this).val();}
	})
	
	$('.league').on('change',function(){
		location.href = baseUrl + 'Liga Usia Muda/' + $(this).val();
	})
</script>




