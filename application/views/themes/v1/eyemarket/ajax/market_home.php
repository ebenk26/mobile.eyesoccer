<div class="container" style="margin-top:-10px;">
    <div class="emarket-content-home">
    	<?php 
    		foreach (array_keys($prod) as $ind)
    		{
    	
				if ($prod[$ind])
				{
    	?>
			    	<div class="container br-market">
			    	    <h2><?= ucwords($ind); ?></h2>
			    	</div>
			    	<?php
			    		foreach ($prod[$ind] as $prodnya)
			    		{
			    	?>
							<div class="box item active">
							    <a href="<?= base_url(); ?>eyemarket/detail/<?= $prodnya->toko; ?>/<?= $prodnya->title_slug; ?>">
							        <div class="em-box-content">
							            <div class="img-prod gr">
							                <img src="<?= MARKETIMG."".$prodnya->image1; ?>" alt="<?= $prodnya->nama; ?>" style="width: 100%;">
							            </div>
							            <h1 class="gr"><?= $prodnya->nama; ?></h1>
							            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
							            <button type="text" class="beli gr">Available Soon</button>
							        </div>
							    </a>
						    </div>
		<?php		
				    	}	
    			}
    		}
    	?>
    </div>
</div>

<?php /* ?>
<div class="container" style="margin-top:20px;">
    <div class="emarket-content-home">
        <!-- kategori kaos -->
        <div class="container br-market">
            <h2>Kaos</h2>
        </div>
		<?php 
			foreach ($kaos as $kaosnya)
			{
		?>
				<div class="box item active">
				    <a href="<?= base_url(); ?>eyemarket/detail/<?= $kaosnya->toko; ?>/<?= $kaosnya->title_slug; ?>">
				        <div class="em-box-content">
				            <div class="img-prod gr">
				                <img src="<?= MARKETIMG."".$kaosnya->image1; ?>" alt="<?= $kaosnya->nama; ?>" style="width: 100%;">
				            </div>
				            <h1 class="gr"><?= $kaosnya->nama; ?></h1>
				            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
				            <button type="text" class="beli gr">Available Soon</button>
				        </div>
				    </a>
			    </div>
		<?php
			}
		?>

        <!-- kategori jersey -->
        <div class="container br-market">
            <h2>Jersey</h2>
        </div>
		<?php 
			foreach ($jersey as $jerseynya)
			{
		?>
				<div class="box item active">
				    <a href="<?= base_url(); ?>eyemarket/detail/<?= $jerseynya->toko; ?>/<?= $jerseynya->title_slug; ?>">
				        <div class="em-box-content">
				            <div class="img-prod gr">
				                <img src="<?= MARKETIMG."".$jerseynya->image1; ?>" alt="<?= $jerseynya->nama; ?>" style="width: 100%;">
				            </div>
				            <h1 class="gr"><?= $jerseynya->nama; ?></h1>
				            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
				            <button type="text" class="beli gr">Available Soon</button>
				        </div>
				    </a>
			    </div>
		<?php
			}
		?>

		<?php 
			if ($topi)
			{
		?>
		        <!-- kategori Topi -->
		        <div class="container br-market">
		            <h2>Topi</h2>
		        </div>
				<?php 
					foreach ($topi as $topinya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $topinya->toko; ?>/<?= $topinya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$topinya->image1; ?>" alt="<?= $topinya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $topinya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>

		<?php 
			if ($jaket)
			{
		?>
				<!-- kategori Jaket -->
		        <div class="container br-market">
		            <h2>Jaket</h2>
		        </div>
				<?php 
					foreach ($jaket as $jaketnya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $jaketnya->toko; ?>/<?= $jaketnya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$jaketnya->image1; ?>" alt="<?= $jaketnya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $jaketnya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>

		<?php 
			if ($sepatu)
			{
		?>
				<!-- kategori Jaket -->
		        <div class="container br-market">
		            <h2>Sepatu</h2>
		        </div>
				<?php 
					foreach ($sepatu as $sepatunya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $sepatunya->toko; ?>/<?= $sepatunya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$sepatunya->image1; ?>" alt="<?= $sepatunya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $sepatunya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>

		<?php 
			if ($mug)
			{
		?>
				<!-- kategori Jaket -->
		        <div class="container br-market">
		            <h2>Mug</h2>
		        </div>
				<?php 
					foreach ($mug as $mugnya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $mugnya->toko; ?>/<?= $mugnya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$mugnya->image1; ?>" alt="<?= $mugnya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $mugnya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>

		<?php 
			if ($keychain)
			{
		?>
				<!-- kategori Keychain -->
		        <div class="container br-market">
		            <h2>Keychain</h2>
		        </div>
				<?php 
					foreach ($keychain as $kcnya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $kcnya->toko; ?>/<?= $kcnya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$kcnya->image1; ?>" alt="<?= $kcnya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $kcnya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>

		<?php 
			if ($tas)
			{
		?>
				<!-- kategori Tas -->
		        <div class="container br-market">
		            <h2>Tas</h2>
		        </div>
				<?php 
					foreach ($tas as $tasnya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $tasnya->toko; ?>/<?= $tasnya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$tasnya->image1; ?>" alt="<?= $tasnya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $tasnya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>

		<?php 
			if ($bola)
			{
		?>
				<!-- kategori Bola -->
		        <div class="container br-market">
		            <h2>Bola</h2>
		        </div>
				<?php 
					foreach ($bola as $bolanya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $bolanya->toko; ?>/<?= $bolanya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$bolanya->image1; ?>" alt="<?= $bolanya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $bolanya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>

		<?php 
			if ($ss)
			{
		?>
				<!-- kategori Sleveless shirt -->
		        <div class="container br-market">
		            <h2>Sleveless shirt</h2>
		        </div>
				<?php 
					foreach ($ss as $ssnya)
					{
				?>
						<div class="box item active">
						    <a href="<?= base_url(); ?>eyemarket/detail/<?= $ssnya->toko; ?>/<?= $ssnya->title_slug; ?>">
						        <div class="em-box-content">
						            <div class="img-prod gr">
						                <img src="<?= MARKETIMG."".$ssnya->image1; ?>" alt="<?= $ssnya->nama; ?>" style="width: 100%;">
						            </div>
						            <h1 class="gr"><?= $ssnya->nama; ?></h1>
						            <p class="prices gr" style="visibility:hidden;"> HARGA</p>
						            <button type="text" class="beli gr">Available Soon</button>
						        </div>
						    </a>
					    </div>
				<?php
					}
				?>
		<?php		
			}
		?>
	</div>
</div>
<?php */ ?>