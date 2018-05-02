<?php
	if($competitionlist)
	{
?>
		<select id="" name="" selected="true" class="slc-musim" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
			<option value>--Pilih Liga--</option>
<?php
		$comptition = "";
		$competitionlist = json_decode($competitionlist);

		foreach($competitionlist->data as $dt) 
		{
			if($dt->competition=='SSB / Akademi Sepakbola')
			{
				if($dt->competition==urldecode($slug)){
					$comptition = 'Non Liga';
					$echosl="";
				}
			} 
			else
			{
				if($dt->competition==urldecode($slug)){
					$comptition = $dt->competition;
					$echosl="selected";
				}
				else{
					$comptition = $dt->competition;
					$echosl="";
				}
				
			}

			if ($submenu == 'klub')
			{
?>
				<option value="<?php echo base_url()."eyeprofile/klub/".$comptition?>" <?php echo $echosl; ?>> 
					<?php echo $comptition;?> 
				</option>
<?php				
			}
			else if ($submenu == 'pemain')
			{
?>
				<option value="<?php echo base_url()."eyeprofile/pemain/".$comptition?>"<?php echo $echosl; ?>> 
					<?php echo $comptition;?> 
				</option>
<?php				
			}
			else
			{
?>
				<option value="<?php echo base_url()."eyeprofile/official/".$comptition?>"<?php echo $echosl; ?>> 
					<?php echo $comptition;?> 
				</option>
<?php
			}
		}
?>
		</select>
<?php
	}
?>

	