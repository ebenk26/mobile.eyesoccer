<?php
	if($klublist)
	{
		$klublist = json_decode($klublist);
		$klubcount = json_decode($playercount);

		if ($submenu == 'klub')
		{
			foreach ($klublist->data as $dt)
			{
?>
				<table class="content-tab-eprofile">
					<tr>
						<td>Jumlah Klub</td>
						<td>: <?php echo $dt->cc;?> klub</td>
					</tr>
					<tr>
						<td>Jumlah Pemain</td>
						<td>: <?php echo $klubcount->data->player_local;?> Pemain</td>
					</tr>
					<tr>
						<td>Pemain Asing</td>
						<td>: <?php echo $klubcount->data->player_foreign;?> Pemain</td>
					</tr>
				</table>
<?php				
			}
		}
		else
		{
			foreach ($klublist->data as $value)
			{
?>
				<tr>
				    <td>jumlah klub</td>
				    <td>:</td>
				    <td><?php echo $value->cc;?> klub</td>
				</tr>
<?php
			}
		}
	}
?>