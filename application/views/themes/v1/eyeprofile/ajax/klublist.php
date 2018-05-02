<?php 
	if($klublist)
	{
		$default = "http://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/small";
		$klublist = json_decode($klublist);
		foreach($klublist->data as $dt)
		{
			?>
				<a href="<?php echo base_url().'eyeprofile/klub_detail/'.$dt->slug;?>">
					<div class="klub-content">
						<div class="img-klub-content">
							<img src="<?php echo $this->library->lastext($dt->url_logo,'.') ? $dt->url_logo : $default;?>/small" alt="<?php echo $dt->name;?>" srcset="">
						</div>
						<h3 class="nama-klub"><?php echo $dt->name;?></h3>
					</div>
				</a>
			<?php 
		}
		
		$klubcount = json_decode($klubcount)->data;
		$pagetotal = ceil($klubcount[0]->cc/24);
		$this->session->set_userdata(array('pagetotalklub' => $pagetotal));
		if($pagetotal > 1)
		{
			if($this->session->userdata('pageklub') > 1)
			{
				?>
					<a href='javascript:void(0)' id='reqback' class='form_post' action='eyeprofile'>
						<input type='hidden' name='fn' value='klublist' class='cinput'>
						<input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
						<input type='hidden' name='paging' value='back' class='cinput'>
						<span><button class="pagination-green-btn" style="float:left;">< Sebelumnya</button></span>
					</a>
				<?php
			}
			
			if($pagetotal > $this->session->userdata('pageklub')){
				?>
					<a href='javascript:void(0)' id='reqnext' class='form_post' action='eyeprofile'>
						<input type='hidden' name='fn' value='klublist' class='cinput'>
						<input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
						<input type='hidden' name='paging' value='next' class='cinput'>
						<span><button class="pagination-green-btn" style="float:right;">Selanjutnya ></button></span>
					</a>
				<?php
			}
		}
	}
?>