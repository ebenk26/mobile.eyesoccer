
<?php 
$query = $res->query;
$data  = $res->data;

if($act == 'like'){?>
	
		<img src="<?php echo MEMENU.'love-active.svg' ?>">
		<span><?php echo $like?></span>
		<span id="<?php echo 'lk'.$query->id?>" class="<?php echo substr($query->id,0,3).'lk'?>" action="eyeme" loading="off">
        <input type="hidden" class="cinput" name="fn" value="gtlike">
        <input type="hidden" class="cinput" name="uid" value="<?php echo $query->id?>">
        <input type="hidden" class="cinput" name="act" value="unlike">
        <input type="hidden" class="cinput" name="clss" value="<?php echo substr($query->id,0,3).'clss'?>">

         </span>

	
<?php }else{?>
	 
        <img src="<?php echo MEMENU.'love.svg'?>">
        <span><?php echo $like?></span>
        <span id="<?php echo 'lk'.$query->id?>" class="<?php echo substr($query->id,0,3).'lk'?>" action="eyeme" loading="off">
        <input type="hidden" class="cinput" name="fn" value="gtlike">
        <input type="hidden" class="cinput" name="uid" value="<?php echo $query->id?>">
        <input type="hidden" class="cinput" name="act" value="like">
        <input type="hidden" class="cinput" name="clss" value="<?php echo substr($query->id,0,3).'clss'?>">

         </span>
	


<?php }?>