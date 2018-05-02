<?php 
if(isset($_GET['q']))
{
	$search=$_GET['q'];
}else
{
	$search=" ";
}
?>
<div class="container-full">
	<div class="box-90">
		<center>Hasil Pencarian "<?php echo $search;?>"</center>
		<div id="reqsearch" class='loadsearch' action="home" loading="off" clean="clssearch">
			<div id='clsdetailclub'>
				<script>
					$(document).ready(function(){
						$(window).on('load',function(){
							ajaxOnLoad('loadsearch');
						});
					});
				</script>
			</div>
			<input type='hidden' name='fn' value='search' class='cinput'>
			<input type='hidden' name='query' value='<?php echo $search;?>' class='cinput'>
			Eyenews
			<div class="etube-content pd-t-10">
				<a href="#" title="3 Nama yang Cocok Menggantikan Arsene Wenger">
					<div class="v-etube">
						<img src="http://static.eyesoccer.id/v1/cache/images/1519793206557_logo_login.png/small" alt="3 Nama yang Cocok Menggantikan Arsene Wenger">
						<div class="btn-play">
							<img src="<?php echo base_url();?>assets/themes/v1/img/btn-play.png" alt="">
						</div>                    
					</div>
					<h1>Lorem Ipsum</h1>
					<span>0 hari </span>
					<span>0 view - 0 suka</span>
				</a>
			</div>
		</div>
	</div>
</div>