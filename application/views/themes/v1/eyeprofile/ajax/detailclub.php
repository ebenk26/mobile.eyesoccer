<?php
	if($detailclub)
	{
		// $detailclub = json_decode($detailclub);
		$dt = $detailclub->data;
		// print_r($dt);
?>
<style>
/* div.user-data{background-color:#00000005} */
div.user-data:hover{background-color:#ff990026}
.td-3-8 tr td{
	padding: 3px 8px;
}
</style>
		<div class="head" style="border-radius: 8px 8px 0px 0px;height: 210px;min-height:  unset;">
			<div class="container tx-c">
				<div class="img-radius">
					<img src="<?php echo $dt->url_logo;?>" alt="">
				</div>
			</div>
				<h2 class="tx-c h2-pemain-top-head"><?php echo $dt->name;?></h2>
				<?php if($dt->id_competition == 4){?>
				<a href="<?php echo ($this->session->member ? base_url().'member/regis_player' : base_url().'member/?from=member/regis_player')?>"><span class="button-open sbpbtn unset-btn-white" style="max-height: unset;box-shadow: 1px 2px 3px 1px #0357b5;border-radius: 30px;max-width: max-content;font-size: .8em;">Daftar Sebagai Pemain <?php echo $dt->name;?></span></a>
				<?php }?>
				<div class="container over-x">
							<div id="boxtab" class="container tab-sub-menu w-max m-0" style="float: unset;position: relative;bottom: unset;margin-top: 20px;">
								<a id="tab-info" href="javascript:void(0)" class="active" onclick="tabmenu(this.id, 'a', 'div', 'active')" active="true" style="padding: 0 8px;">Info</a>
								<a id="tab-pemain" href="javascript:void(0)" class="tabmenu(this.id, 'a', 'div', 'active')" onclick="tabmenu(this.id, 'a', 'div', 'active')" active="true" style="border-left: 1px solid;padding: 0 8px;">Pemain</a>
								<a id="tab-ofisial" href="javascript:void(0)" onclick="tabmenu(this.id, 'a', 'div', 'active')" style="border-left: 1px solid;border-right:  1px solid;border-color: white; padding: 0 8px;">Ofisial</a>
								<a id="tab-suporter" href="javascript:void(0)" onclick="tabmenu(this.id, 'a', 'div', 'active')"  style="padding: 0 8px;border-right:  1px solid;">Prestasi</a>
								<a id="tab-galeri" href="javascript:void(0)" onclick="tabmenu(this.id, 'a', 'div', 'active')"  style="padding: 0 8px;">Galeri</a>
							</div>
						</div>
			</div>
		<div id="tab-info" class="container">
			<div class="ep-des">
			<!-- <h2 class="tx-c" style="font-weight: 400;"><?php echo $dt->name;?></h2>	 -->
				<?php echo $dt->description;?>
				<table class="content-tab-eprofile">
					<tr>
						<td>Julukan</td>
						<td>: <?php echo $dt->nickname;?></td>
					</tr>
					<tr>
						<td>Tanggal Berdiri</td>
						<td>: <?php echo $dt->establish_date;?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>: <?php echo strip_tags($dt->address);?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>: <?php echo $dt->email;?></td>
					</tr>
					<!-- <tr>
						<td>Website</td>
						<td>: <?php echo $dt->website;?></td>
					</tr> -->
				</table>
			</div>
		</div>
		<div id="tab-pemain" class="container">
			<?php
				foreach($dt->players as $players){
			?>
			<div class="user-data">
				<div class="img-radius" style="width:  80px;height: 80px;float:  left;margin:  10px;">
					<img src="<?php echo $players->url_pic;?>" alt="<?php echo $players->name;?>">
				</div>
				<table class="td-3-8" style="width: 180px;float:  left;margin: 10px -10px;">
					<tr>
						<td style="font-size: 1.1em;font-weight: 600;">
						<?php echo $players->name;?> / #<?php echo $players->back_number;?>
						</td>
					</tr>
					<tr>
						<td>
						<?php echo $players->club;?>
						</td>
					</tr>
					<?php
						$pos1=$players->position_a;
						$pos2=$players->position_b;
						if(empty($pos2)){
						$L_pos1="Posisi";
						echo	
							"<tr>
								<td>".$pos1."</td>
							</tr>
							<tr>";
						}
						else{
						$L_pos1="Posisi 1";
						$L_pos2="Posisi 2";
						echo	
							"<tr>
								<td>".$pos1."></td>
							</tr>
							<tr>
								<td>".$pos2."</td>
							</tr>";
						}	
					?>
				</table>
				<a href="<?php echo base_url();?>eyeprofile/pemain_detail/<?php echo $players->slug;?>">lihat detail pemain</a>
			</div>
			<script>
				$(document).ready(function(){
					$("li#slug_klub_detail").html("<?php echo $dt->name;?>");
					$("h3#next_match_klub").html("Jadwal pertandingan <?php echo $dt->name;?>");
				});
			</script>
<?php
			}?>
		</div>
		<div id="tab-ofisial" class="container" style="display:none;">
			<?php
				foreach($dt->official as $officials){
			?>
			<div class="user-data">
				<div class="subhead">
					<div class="img-radius">
						<img src="<?php echo $officials->url_pic;?>" alt="<?php echo $officials->name;?>">
					</div>
					<b><?php echo $officials->position;?></b>
					<h3><?php echo $officials->club;?></h3>
				</div>
				<table>
					<tr>
						<td>Tanggal Lahir</td>
						<td><?php echo $officials->birth_date;?></td>
					</tr>
					<tr>
						<td>Lisensi</td>
						<td><?php echo $officials->license;?></td>
					</tr>
				</table>
				<a href="<?php echo base_url();?>eyeprofile/official_detail/<?php echo $officials->slug;?>">lihat detail ofisial</a>
			</div>
			<?php
				}
			?>
		</div>
		
		<div id="tab-suporter" class="container" style="display:none;">
			<div class="container">
				<div class="container pemain-detailll">
				<?php
					$i = 0;
					foreach($dt->careers as $careers){
					$i++;
				?>
							<div class="container table-span1" active="false" onclick="functionPemainDetail(<?php echo $i;?>)">
								<span>#<?php echo $i;?></span>
								<i class="fas fa-angle-double-down"></i>
								<table>
									<tr>
										<td>Tahun</td>
										<td><?php echo $careers->year;?></td>
									</tr>
									<tr>
										<td>Bulan</td>
										<td><?php echo $careers->month;?></td>
									</tr>
								</table>
							</div>
							<div class="table-span2 pemainDetail" id="pemainDetail<?php echo $i;?>" style="display:none;">
								<table>
									<tr>
										<td>Turnamen / Kompetisi</td>
										<td><?php echo $careers->tournament;?></td>
									</tr>
									<tr>
										<td>Peringkat</td>
										<td><?php echo $careers->rank;?></td>
									</tr>
									<tr>
										<td>Pelatih</td>
										<td><?php echo $careers->coach;?></td>
									</tr>
								</table>
							</div>
				<?php
					}
				?>
				</div>
			</div>
		</div>
		<div id="tab-galeri" class="container" style="display:none;">
			
				<?php
					foreach($dt->gallery as $gallery){
				?>
					<div class="user-data">
						<img style="width: 100%;box-shadow: 0 1px 11px -5px #727277;border-radius: 5px;" src="<?php echo $gallery->url_pic;?>" alt="foto club">
					</div>
				<?php
					}
				?>
		</div>
			<?php
	}
?>
<script>
	$(document).ready(function(){
		// alert();
		$("#tab-info").click();
	});
	function functionPemainDetail(i) {
		var x = document.getElementById("pemainDetail"+i);
		if (x.style.display == "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
</script>