<?php
    if ($newscat){
	$newscat = json_decode($newscat);
	foreach($newscat->data as $dt)
	{
	    $title = $dt->news_type;
	    switch($dt->news_type)
	    {
		case 'Berita':
		    $title = 'Peristiwa';
		break;
		
		case 'Usia Muda':
		    $title = 'Pembinaan';
		break;
	    }
	    
	    ?>
		<a href="<?php echo base_url("eyenews/kategori/$dt->news_type"); ?>" title="<?php echo $title;?>"><?php echo $title;?></a>
	    <?php
	}
    }
?>