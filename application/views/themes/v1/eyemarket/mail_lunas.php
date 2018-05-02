
<div style="font-family: arial, sans-serif">
	<table align="center" bgcolor="#fff" border="0" cellpadding="0" cellspacing="0" style="margin:5% auto;width:100%;max-width:600px">
		<tbody>
			<tr>
				<td>
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:10px 15px;font-size:14px;background-color: #347FC0;">
	                    <tbody>
	                    	<tr>
	                        	<td width="60%" align="left" style="padding:5px 0 0">
	                            	<img src="https://www.eyesoccer.id/img/logo2.png" alt="Logo Eyesoccer" width="130">
	                        	</td>
	                        	<td width="40%" align="right" style="padding:5px 0 0">
	                            	<span style="font-size:18px;font-weight:300;color:#ffffff;font-family: arial, sans-serif">EyeMarket</span>
	                        	</td>
	                    	</tr>
	                	</tbody>
	            	</table>
				</td>
			</tr>
			<tr>
				<td style="padding: 25px 15px 10px;">
					<table width="100%">
	                    <tbody>
	                    	<tr>
	                    		<td>
	                				<h1 style="margin:0;font-size:16px;font-weight:bold;line-height:24px;color:rgba(0,0,0,0.70)">Halo Muhammad Robi,</h1>
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td>
		                        	<p style="margin:0;font-size:16px;line-height:24px;">Terima kasih atas kepercayaan anda memesan produk di EyeMarket. Pemesanan anda akan segera kami kirim.</p>
	                        	</td>
	                    	</tr>
	                    	<tr>
	                    		<td>
	                    			<table>
	                    			    <tr style="height: 20px;"></tr>
	                    			    <tr>
	                    			        <td>
	                    			            INVOICE
	                    			        </td>
	                    			        <td>
	                    			            :
	                    			        </td>
	                    			        <td>
	                    			            <a href="<?php echo base_url(); ?>eyemarket/invoice/<?= $model->no_order; ?>">
	                    			                <?= $model->no_invoice; ?>
	                    			            </a>
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td>
	                    			            Status Pembayaran
	                    			        </td>
	                    			        <td>
	                    			            :
	                    			        </td>
	                    			        <td>
	                    			            <span style="background-color: #5cb85c;display: inline;
	                    			              padding: .20em .6em .3em;
	                    			              font-size: 16px;
	                    			              font-weight: bold;
	                    			              line-height: 1;
	                    			              color: #fff;
	                    			              text-align: center;
	                    			              white-space: nowrap;
	                    			              vertical-align: baseline;
	                    			              border-radius: .25em;">
	                    			                                LUNAS
	                    			                            </span>
	                    			        </td>
	                    			    </tr>
	                    			    <tr style="height: 20px;"></tr>
	                    			    <tr>
	                    			        <td></td>
	                    			        <td></td>
	                    			    </tr>
	                    			</table>
	                    			<hr style="border-top-color:#d0d0d0;border-top-style:solid;border-bottom-color:#ffffff;border-bottom-style:solid;margin:20px 0;padding:0;border-width:3px 0 1px">
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td>
	                    			<table align="center">
	                    			    <tr>
	                    			        <td colspan="3" align="center">
	                    			             Berikut produk lain yang mungkin anda minati.
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td align="center">
	                    			<?php 
	                    				foreach ($prod_lain as $value)
	                    				{
	                    			?>
	                    						<table>
	                    							<tr>
	                    								<td>
	                    									<img src="<?= base_url(); ?>img/eyemarket/produk<?= $value['image1']; ?>" alt="<?= $value['nama']; ?>" style="width: 200px; height: 200px;">
	                    								</td>
	                    								<td width="150">
	                    									<?= $value['nama']; ?>
	                    									<br>
	                    									<a href="<?= base_url() ?>eyemarket/detail/<?= $value['toko'] ?>/<?= $value['title_slug']; ?>">
		                    									<button style="background-color: #5bc0de;
																	border-color: #46b8da;display: inline;
		                    									  padding: .20em .6em .3em;
		                    									  font-size: 16px;
		                    									  font-weight: bold;
		                    									  line-height: 1;
		                    									  color: #fff;
		                    									  text-align: center;
		                    									  white-space: nowrap;
		                    									  vertical-align: baseline;
		                    									  border-radius: .25em;
		                    									  cursor: pointer;">
		                    									                    Lihat
		                    									</button>
	                    									</a>
	                    								</td>
	                    							</tr>
	                    						</table>
	                    			<?php		
	                    				}
	                    			?>
	                    			        </td>
	                    			    </tr>
	                    			</table>
	                    		</td>
	                    	</tr>
	                    	<hr style="border-top-color:#d0d0d0;border-top-style:solid;border-bottom-color:#ffffff;border-bottom-style:solid;margin:20px 0;padding:0;border-width:3px 0 1px">
	                    	
	                	</tbody>
	            	</table>
				</td>
			</tr>
		</tbody>
	</table>
</div>
