<div class="content-explore">
<?php
	$explore = json_decode($explore);
	foreach($explore->data as $k => $v)
	{
		?>
		    <div class="content-explore-item">
			    <?php 
				     $imglist = array('src' => $v->url_img,'alt'=> $v->img_caption);
				     //if user has been login 
				     if($this->session->member){
				     	$imglist['onclick'] = 'gambar(this.id)';
				     	$imglist['id']      = $v->id;
				     }
				     else{
				     	$imglist['onclick'] = 'xdir()';
				     }
				     echo img($imglist)
				?>
		    </div>
		<?php 
	}
?>
</div>

 <div id="reqnewexp" class='loadexplist loadhide' action="eyeme" loading="off" wait>
    <img style="width: 40%; margin-left: 30%;" class="load-gif" src="<?php echo base_url();?>assets/img/loadingsoccer.gif" alt="Loading">
    <input type="hidden" name="fn" value="explorelist" class="cinput">
    <input type="hidden" name="sess" value="true" class="cinput">

    <script type="text/javascript">
		$(window).scroll(function(){
		    if($(window).scrollTop() >= $(document).height()/4 + $(document).height()/6) {
		        $('.loading').show();
		        ajaxOnLoad('loadexplist');
		    }
		}); 
	</script>
</div>
     
  
