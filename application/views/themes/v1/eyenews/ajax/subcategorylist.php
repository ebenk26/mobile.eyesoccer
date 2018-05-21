<?php
    if ($subcatlist){
	$subcatlist = json_decode($subcatlist);
	$newslistcat = json_decode($newslistcat);
?>	
		<div class="container top-menu-ketegori over-x" style="padding-top: 5px;border-bottom: 1px solid gainsboro;margin-bottom: 10px;background-color: #fafafa;height: 35px;">
        <div class="w-max fl-l">
            <a class="active" href="<?php echo base_url();?>eyenews/#">HOME</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Di Pinggir Lapangan">Di Pinggir Lapangan</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Liga">LIGA</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Pembinaan">Pembinaan</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Peristiwa">Peristiwa</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Prediksi">Prediksi</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Soccer Sains">Soccer Sains</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Soccer Seri">Soccer Seri</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Tulisan Kamu">Tulisan Kamu</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Ulas Tuntas">Ulas Tuntas</a>
			<a href="<?php echo base_url();?>eyenews/kategori/Umpan Lambung">Umpan Lambung</a>
        </div>
    </div>
<?php
	}
?>



<?php
    // if ($subcatlist){
	// $subcatlist = json_decode($subcatlist);
// ?>	
	<!-- <div class="crumb">
	<div class="container" style="text-align: center;background-color: #fafafa;"> -->
<?php
	// foreach($subcatlist->data as $dt)
	// {
	    // ?>
			<!-- <span class="subcategorylist"><a href="<?php // echo base_url().'eyenews/kategori/'.$slug.'/'.$dt->sub_category_name?>"><?php // echo $dt->sub_category_name; ?></a></span> -->
		
<?php
	// }
// ?>
	<!-- </div>
	</div> -->
<?php
    // }
?>