

<div class="card">
    <div class="card-block">
        <h1>Konfirmasi Pesanan</h1>
        <br>
        <form action="<?= base_url(); ?>eyemarket" class="form_multi" loading="off" enctype="multipart/form-data" method="post">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="col-md-6" style="padding-left: unset;">
    					<div class="form-group">
    					    <label>No. Order</label>
    					    <input type="number" name="no_order" class="form-control p-input" value="<?= $model->no_order; ?>">
    					</div>
    				</div>
    			</div>
    			<div class="col-md-12">
    				<div class="col-md-6" style="padding-left: unset;">
    					<div class="form-group">
    					    <label>Jumlah Yang di Transfer (Rp.)</label>
    					    <input type="number" name="nominal" class="form-control p-input" placeholder="e.g : 1000000">
    					</div>
    				</div>
    			</div>
    			<div class="col-md-12">
    				<div class="col-md-6" style="padding-left: unset;">
    					<div class="form-group">
    					    <label>Upload Bukti</label>
    					    <input type="file" name="bukti" class="form-control-file">
    					</div>
    				</div>
    			</div>
    		</div>
    	    <div class="col-12">
    	        <button type="submit" class="btn btn-primary">Submit</button>
    	    </div>
            <input type="hidden" name="fn" value="set_confirm">
            <input type="hidden" name="id_order" value="<?= $model->id; ?>">
        </form>
    </div>
</div> 