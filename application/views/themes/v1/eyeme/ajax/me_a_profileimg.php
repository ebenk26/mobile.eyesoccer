<?php 
$res = $res->data;

echo '<div class="content-profile">';
foreach($res->images as $k => $v){?>
    
    <div class="content-profile-item">
        <img src="<?php echo $v->url_img.'/medium'?>" alt="<?php echo $v->img_caption?>" id="<?php echo $v->id?>" onclick="gambar(this.id)">
    </div>
   
<?php } 
echo '</div>';

?>
 <script type="text/javascript">
    var meimg = '<?php echo MEIMGUSR?>'
	function gambar(ref){
        location.href= meimg + ref;
    }

</script>

