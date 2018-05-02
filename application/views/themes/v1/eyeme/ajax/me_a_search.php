<?php 
$res = json_decode($res);
if(count($res->data) > 0 ){

	echo '<div style="height: 500px">';
	foreach($res->data as $k => $v){?>
		<div class="pp">
			<a href="<?php echo MEPROFILE.$v->username?>">
				<table class="srch-me">
					<tr>
						<td>
							<div class="pp-search">
								<img src="<?php echo $v->url_pic?>" onerror="this.src='<?php echo DPIC?>'"/>
							</div>
						</td>
						<td>
							<span class="container"><?php echo $v->username.'  ('.$v->name.')'?></span>
						</td>
					</tr>
				</table>
			</a>
		</div>

		<?php 
	}
	echo '</div>';

}
else{?>
	
	<span class="srch-not-found">Pengguna Tidak Ditemukan</span>

<?php }?>
