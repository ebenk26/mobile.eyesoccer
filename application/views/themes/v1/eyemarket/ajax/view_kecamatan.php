
<select id="kecamatan" name="kecamatan" class="form-control">
			<option value="">Pilih Kecamatan</option>
	<?php 
		foreach ($kecamatan as $value)
		{
	?>
			<option value="<?= $value->kecamatan; ?>"><?= $value->kecamatan; ?></option>
	<?php		
		}
	?>
    
</select>