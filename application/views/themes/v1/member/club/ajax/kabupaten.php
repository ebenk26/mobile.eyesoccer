<select id="kabupaten" name="kabupaten" class="form-control">
			<option value="">Pilih Kabupaten</option>
	<?php 
		foreach ($kabupatenlist->data as $value)
		{
	?>
			<option value="<?= $value->id; ?>"><?= $value->nama; ?></option>
	<?php		
		}
	?>
    
</select>