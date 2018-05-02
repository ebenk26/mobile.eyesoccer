<?php if($matchlist){
	$matchlist = json_decode($matchlist);
	if(!empty($matchlist->data)){
		foreach($matchlist->data as $dt){
?>
	<div class="jadwal-content">
		<table>
				<tr>
					<td><?php echo $dt->match_schedule;?></td>
					<td></td>
				</tr>
				<tr>
					<td><?php echo $dt->team_a;?></td>
					<td><?php echo $dt->score_a;?></td>
				</tr>
				<tr>
					<td><?php echo $dt->team_b;?></td>
					<td><?php echo $dt->score_b;?></td>
				</tr>
		</table>
	</div>
<?php 
		}
	}else{
?>
	<div class="jadwal-content">
		Belum ada hasil pertandingan.
	</div>
<?php
	}
}
?>