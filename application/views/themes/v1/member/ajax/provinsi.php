<?php
	if($provinsilist)
	{
?>
		<select name="id_provinsi" selected="true" class="slc-musim">
			<option value>--Pilih Provinsi--</option>
<?php
		$provinsilist = json_decode($provinsilist);

		foreach($provinsilist->data as $dt) 
		{
?>
			<option value="<?php echo base_url()."eyeprofile/klub/".$comptition?>" <?php echo $echosl; ?>> 
				<?php echo $comptition;?> 
			</option>
<?php
		}
?>
		</select>
<?php
	}
?>

	