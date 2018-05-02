
<select id="kota" name="kota" class="form-control form_change" action="eyemarket" fn="get_kecamatan" loading="off" dest="opt-kecamatan">
			<option value="">Pilih Kota</option>
	<?php 
		foreach ($kota as $value)
		{
	?>
			<option value="<?= $value->kota; ?>"><?= $value->kota; ?></option>
	<?php		
		}
	?>
    
</select>