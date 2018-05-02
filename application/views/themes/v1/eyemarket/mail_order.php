
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
		                        	<p style="margin:0;font-size:16px;line-height:24px;">Terima kasih sudah memesan produk dari EyeMarket</p>
	                        	</td>
	                    	</tr>
	                    	<tr>
	                    		<td>
	                    			<table>
	                    			    <tr>    
	                    			        <td width="200">
	                    			            Jumlah biaya yang harus anda transfer adalah 
	                    			        </td>
	                    			        <td>
	                    			            :
	                    			        </td>
	                    			        <td>
	                    			            <span style="color: red; font-weight: bold; font-size: 20px;"> Rp. <?= number_format($model->harga_all,0,',','.'); ?> 
	                    			            </span> 
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td></td>
	                    			        <td></td>
	                    			        <td>
	                    			            Harap transfer tepat dengan nominal diatas sebelum : 
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td></td>
	                    			        <td></td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td></td>
	                    			        <td></td>
	                    			        <td>
	                    			            <span style="background-color: #ec971f;display: inline;
	                    			                      padding: .20em .6em .3em;
	                    			                      font-size: 16px;
	                    			                      font-weight: bold;
	                    			                      line-height: 1;
	                    			                      color: #fff;
	                    			                      text-align: center;
	                    			                      white-space: nowrap;
	                    			                      vertical-align: baseline;
	                    			                      border-radius: .25em;">
	                    			                <?= date('d/m/Y H:i:s',strtotime($expired)); ?>
	                    			            </span>
	                    			        </td>
	                    			    </tr>
	                    			    <tr style="height: 20px;"></tr>
	                    			    <tr>
	                    			        <td>
	                    			            Status Pembayaran
	                    			        </td>
	                    			        <td>
	                    			            :
	                    			        </td>
	                    			        <td>
	                    			            <span style="background-color: #ec971f;display: inline;
	                    			              padding: .20em .6em .3em;
	                    			              font-size: 16px;
	                    			              font-weight: bold;
	                    			              line-height: 1;
	                    			              color: #fff;
	                    			              text-align: center;
	                    			              white-space: nowrap;
	                    			              vertical-align: baseline;
	                    			              border-radius: .25em;">
	                    			                                Menunggu Pembayaran
	                    			                            </span>
	                    			        </td>
	                    			    </tr>
	                    			    <tr style="height: 20px;"></tr>
	                    			    <tr>
	                    			        <td>
	                    			            INVOICE
	                    			        </td>
	                    			        <td>
	                    			            :
	                    			        </td>
	                    			        <td>
	                    			            <a href="<?php echo base_url(); ?>eyemarket/invoice/<?= $no_order; ?>">
	                    			                <?= $no_invoice; ?>
	                    			            </a>
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td></td>
	                    			        <td></td>
	                    			        <td>
	                    			            <i>Pastikan invoice sudah sesuai dengan pesanan anda</i>
	                    			        </td>
	                    			    </tr>
	                    			</table>
	                    			<hr style="border-top-color:#d0d0d0;border-top-style:solid;border-bottom-color:#ffffff;border-bottom-style:solid;margin:20px 0;padding:0;border-width:3px 0 1px">
	                    		</td>
	                    	</tr>
	                    	<tr>
	                    		<td>
	                    			<table align="center">
	                    			    <tr>
	                    			        <td align="center">
	                    			            Mohon melakukan pembayaran ke :
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td align="center">
	                    			            <img style="height: 115px;" src="https://www.eyesoccer.id/assets/eyemarket/<?= $model->logo; ?>" alt="logo_<?= $model->logo;?>">
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td align="center">
	                    			            a/n <?= $model->nama_pemilik ?>
	                    			        </td>
	                    			    </tr>
	                    			    <tr>
	                    			        <td align="center">
	                    			            <h1><mark><?= $model->rekening; ?></mark></h1> 
	                    			        </td>
	                    			    </tr>
	                    			</table>
	                    		</td>
	                    	</tr>
	                    	<hr style="border-top-color:#d0d0d0;border-top-style:solid;border-bottom-color:#ffffff;border-bottom-style:solid;margin:20px 0;padding:0;border-width:3px 0 1px">
	                    	<tr>
	                    		<td>
	                    			<table align="center">
	                    			    <tr>
	                    			        <td align="center">
	                    			            <a href="<?php echo base_url(); ?>eyemarket/konfirmasi/<?= $no_order; ?>" style="display: inline-block;
																	  padding: 6px 12px;
																	  margin-bottom: 0;
																	  font-size: 14px;
																	  font-weight: normal;
																	  line-height: 1.42857143;
																	  text-align: center;
																	  white-space: nowrap;
																	  vertical-align: middle;
																	  -ms-touch-action: manipulation;
																	      touch-action: manipulation;
																	  cursor: pointer;
																	  -webkit-user-select: none;
																	     -moz-user-select: none;
																	      -ms-user-select: none;
																	          user-select: none;
																	  background-image: none;
																	  border: 1px solid transparent;
																	  border-radius: 4px;
																	  color: #fff;
																	  background-color: #5bc0de;
																	  border-color: #46b8da;
																	  padding: 10px 16px;
																	  font-size: 18px;
																	  line-height: 1.3333333;
																	  border-radius: 6px;">
	                    			            	Konfirmasi Pembayaran
	                    			            </a>
	                    			        </td>
	                    			    </tr>
	                    			</table>
	                    		</td>
	                    	</tr>
	                	</tbody>
	            	</table>
				</td>
			</tr>
		</tbody>
	</table>
</div>