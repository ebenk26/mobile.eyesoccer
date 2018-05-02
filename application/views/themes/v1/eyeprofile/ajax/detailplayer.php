<?php
	if($detailplayer)
	{
		$detailplayer = json_decode($detailplayer);
		$dt = $detailplayer->data;

		if($dt->position_b==NULL)
		{
			$dt->display_position_b='style="display: none"';
		}
		else 
		{
			$dt->display_position_b='style="display: yes"';
		}
		if($dt->birth_date==NULL)
		{
			$dt->display_birth_date='style="display: none"';
		}
		else 
		{
			$dt->display_birth_date='style="display: yes"';
		}
		if($dt->birth_place==NULL)
		{
			$dt->display_birth_place='style="display: none"';
		}
		else 
		{
			$dt->display_birth_place='style="display: yes"';
		}
		if($dt->height==NULL)
		{
			$dt->display_height='style="display: none"';
		}
		else 
		{
			$dt->display_height='style="display: yes"';
		}
		if($dt->weight==NULL)
		{
			$dt->display_weight='style="display: none"';
		}
		else 
		{
			$dt->display_weight='style="display: yes"';
		}
		if($dt->level==NULL)
		{
			$dt->display_level='style="display: none"';
		}
		else 
		{
			$dt->display_level='style="display: yes"';
		}
		if($dt->nickname==NULL)
		{
			$dt->display_nickname='style="display: none"';
		}
		else 
		{
			$dt->display_nickname='style="display: yes"';
		}
		if($dt->foot==NULL)
		{
			$dt->display_foot='style="display: none"';
		}
		else 
		{
			$dt->display_foot='style="display: yes"';
		}
		if($dt->position_a==NULL)
		{
			$dt->display_position_a='style="display: none"';
		}
		else 
		{
			$dt->display_position_a='style="display: yes"';
		}
?>
		<div class="head">
			<div class="img-radius">
				<img src="<?php echo $this->library->lastext($dt->url_pic,'.') ? $dt->url_pic : $default;?>/medium" alt="<?php echo $dt->name;?>">
			</div>
			<h2 class="h2-text-bottom"><?php echo $dt->name;?></h2>
			<p style="display:none;">
					ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain ini bio pemain 
			</p>
		</div>
		<div class="container b-t-b-5 table-profile">
			<table style="font-size: 1em;">
				<tr>
					<th colspan="2">Profil</th>
				</tr>
				<tr>
					<td>Kewarganegaraan</td>
					<td><?php echo $dt->nationality;?></td>
				</tr>
				<tr <?php echo $dt->display_birth_place; ?>>
					<td>Tempat Lahir</td>
					<td><?php echo $dt->birth_place;?></td>
				</tr>
				<tr <?php echo $dt->display_birth_date; ?>>
					<td>Tanggal Lahir</td>
					<td><?php echo $dt->birth_date;?></td>
				</tr>
				<tr <?php echo $dt->display_level;?>>
					<td>Kategori Pemain</td>
					<td><?php echo $dt->level;?></td>
				</tr>
				<tr <?php echo $dt->display_height;?>>
					<td>Tinggi</td>
					<td><?php echo $dt->height;?> cm</td>
				</tr>
				<tr <?php echo $dt->display_weight;?>>
					<td>Berat</td>
					<td><?php echo $dt->weight;?> kg</td>
				</tr>
				<tr <?php echo $dt->back_number;?>>
					<td>No. Punggung</td>
					<td><?php echo $dt->back_number;?></td>
				</tr>
				<tr <?php echo $dt->display_nickname;?>>
					<td>Nama Panggilan</td>
					<td><?php echo $dt->nickname;?></td>
				</tr>
				<tr <?php echo $dt->display_foot;?>>
					<td>Kemampuan Kaki</td>
					<td><?php echo $dt->foot;?></td>
				</tr>
				<tr <?php echo $dt->display_position_a;?>>
					<td>Posisi Utama</td>
					<td><?php echo $dt->position_a;?></td>
				</tr>
				<tr <?php echo $dt->display_position_b;?> >
					<td>Posisi Lainnya</td>
					<td><?php echo $dt->position_b;?></td>
				</tr>
			</table>
		</div>
		<div class="container table-blue">
			<h3 class="h3-orange">Karir Klub</h3>
			<div class="table-scroll-x">
			<table class="table-stripe">
				<tr>
					<th>#</th>
					<th>bulan</th>
					<th>Tahun</th>
					<th>Klub</th>
					<th>Turnamen/Kompetisi</th>
					<th>Jumlah Main</th>
					<th>No. Punggung</th>
					<th>Pelatih</th>
				</tr>
				<?php
					$i = 1;
					foreach($dt->career_club as $cc){
				?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $cc->month;?></td>
							<td><?php echo $cc->year;?></td>
							<td><?php echo $cc->club;?></td>
							<td><?php echo $cc->tournament;?></td>
							<td><?php echo $cc->number_of_play;?></td>
							<td><?php echo $cc->back_number;?></td>
							<td><?php echo $cc->coach;?></td>
						</tr>
				<?php
					$i++;
					}
				?>
			</table>
			</div>
			<h3 class="h3-orange">karir timnas</h3>
			<div class="table-scroll-x">
				<table class="table-stripe">
					<tr>
						<th>#</th>
						<th>Tahun</th>
						<th>Turnamen/Kompetisi</th>
						<th>Jumlah Main</th>
						<th>No. Punggung</th>
						<th>Pelatih</th>
					</tr>
					<?php
						$x = 1;
						foreach($dt->career_national as $nc){
					?>
							<tr>
								<td><?php echo $x;?></td>
								<td><?php echo $nc->year;?></td>
								<td><?php echo $nc->club;?></td>
								<td><?php echo $nc->number_of_play;?></td>
								<td><?php echo $nc->back_number;?></td>
								<td><?php echo $nc->coach;?></td>
							</tr>
					<?php
						$x++;
						}
					?>
				</table>
			</div>
			
			<h3 class="h3-orange">Prestasi</h3>
			<div class="table-scroll-x">
				<table class="table-stripe">
					<tr>
						<th>#</th>
						<th>Tahun</th>
						<th>Turnamen/Kompetisi</th>
						<th>Negara</th>
						<th>Peringkat</th>
						<th>Penghargaan</th>
					</tr>
					<?php
						$x = 1;
						foreach($dt->achievement as $ac){
					?>
							<tr>
								<td><?php echo $x;?></td>
								<td><?php echo $ac->year;?></td>
								<td><?php echo $ac->tournament;?></td>
								<td><?php echo $ac->country;?></td>
								<td><?php echo $ac->rank;?></td>
								<td><?php echo $ac->appreciation;?></td>
							</tr>
					<?php
						$x++;
						}
					?>
				</table>
			</div>
			
			<h3 class="h3-orange" style="display:none;">detail posisi</h3>
			<div class="container detail-posisi" style="display:none;">
				<img src="http://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/small" alt="" style="display:none;">
				<div class="container" style="background-color: #fafafaa3;">
					<div class="half-content">
						<h4>posisi utama</h4>
						<span>gelandang bertahan</span>
					</div>
					<div class="half-content">
						<h4>posisi lainnya</h4>
						<span>gelandang tengah</span>
						<span>bek tengah</span>
					</div>
				</div>
			</div>
			<h3 class="h3-orange" style="display:none;">statistik</h3>
			<div class="container eprofile-statistik" style="display:none;">
				<table>
					<tr>
						<th colspan="2">
							<ul>
								<li>
									<a href="#">Home</a>
								</li>
								<li>
									<a href="#">Menu 1</a>
								</li>
								<li>
									<a href="#">Menu 2</a>
								</li>
								<li>
									<a href="#">Menu 3</a>
								</li>
							</ul>
						</th>
					</tr>
					<tr>
						<td>lorem</td>
						<td>ipsum</td>
					</tr>
					<tr>
						<td>lorem</td>
						<td>ipsum</td>
					</tr>
					<tr>
						<td>lorem</td>
						<td>ipsum</td>
					</tr>
					<tr>
						<td>lorem</td>
						<td>ipsum</td>
					</tr>
				</table>
			</div>
			<h3 class="h3-orange" style="display: block;">Foto galeri</h3>
			<div class="cotainer over-x" style="display: block;width:  100%;float:  left;">
				<div class="w-max">
					<?php foreach($dt->gallery as $gl)
					{
					?>
						<div class="display-img img-gal">
							<img class="container" src="<?php echo $gl->url_pic;?>" alt="<?php echo $dt->name;?>">
						</div>
					<?php 
					}
					?>
				</div>
			</div>
			<!-- <div class="arrow" style="top:  -147px;">
				<i class="material-icons">keyboard_arrow_left</i>
				<i style="float: right;" class="material-icons">keyboard_arrow_right</i>
			</div> -->
		</div>
		<script>
				$(document).ready(function(){
					$("li#slug_pemain_detail").html("<?php echo $dt->name;?>");
				});
		</script>
			<?php
	}
?>
<!-- <div class="container pemain-detailll">
<div class="container table-span1" active="false" onclick="functionPemainDetail()">
	<span>#1</span>
	<i class="fas fa-angle-double-down"></i>
	<table>
		<tr>
			<td>Tahun</td>
			<td>2018</td>
		</tr>
		<tr>
			<td>Klub</td>
			<td>Arema</td>
		</tr>
	</table>
</div>
<div class="table-span2 pemainDetail" id="pemainDetail" style="display:none;">
	<table>
		<tr>
			<td>Turnamen / Kompetisi</td>
			<td>Liga Indonesia 1</td>
		</tr>
		<tr>
			<td>Jumlah Main</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Nomor Punggung</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Pelatih</td>
			<td>Santiago</td>
		</tr>
	</table>
</div>
</div> -->
<script>
function functionPemainDetail() {
	var x = document.getElementById("pemainDetail");
	if (x.style.display == "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
</script>