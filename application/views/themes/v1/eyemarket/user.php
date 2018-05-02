

<style type="text/css" media="screen">
	label{
		font-weight: 400;
	    color: #b3b3b3;
	    font-size: .8em;
	}
</style>

<div id="reqprofile" class='loadprofile' action="eyemarket" loading="off" clean="clsmarket">
    <div id="clsmarket">
       <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadprofile');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='profile' class='cinput'>
    <h1>Profile 
    	<a data-toggle="modal" data-target="#form-edit-profile" class="btn btn-outline-success" id="edit-profile">Edit</a> 
    </h1>
    <br>

    <div class="row">
    	<div class="col-md-6 col-lg-6">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="form-group">
    					<label> Nama Pengguna </label>
    					<div></div>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="form-group">
    					<label> Nama Lengkap </label>
    					<div></div>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="form-group">
    					<label> Email </label>
    					<div></div>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="form-group">
    					<label> No. Hp </label>
    					<div></div>
    				</div>
    			</div>
    			<div class="col-md-12">
    				<div class="form-group">
    					<label> Alamat </label>
    					<div></div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-6 col-lg-6">
    		<div class="row">
    			<div class="form-edit-profile" style="display: none;">
    				<form action="profile_submit" method="post" accept-charset="utf-8">
    					<div class="col-md-6">
    						<div class="form-group">
    							<label>Nama Lengkap</label>
    							<input type="text" name="username" value="">
    						</div>
    					</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</div>