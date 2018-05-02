<h1>Profile 
	<!-- <a data-toggle="modal" data-target="#form-edit-profile" class="btn btn-outline-success" id="edit-profile">Edit</a>  -->
</h1>

<!-- modal edit profile -->
<div class="modal fade" id="form-edit-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #209eed;color: #fff;">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        	<form action="<?= base_url() ?>eyemarket/edit_profile/<?= $id_member;?>" method="post">
	            <div class="modal-body">
            		<div class="form-group">
            			<label>Username</label>
            			<input type="text" name="username" class="form-control" value="<?= $username; ?>">
            		</div>
            		<div class="form-group">
            			<label> Nama Lengkap</label>
            			<input type="text" name="fullname" class="form-control" value="<?= $nama_lengkap; ?>">
            		</div>
            		<div class="form-group">
            			<label> Email</label>
            			<input type="email" name="email" class="form-control" value="<?= $email; ?>">
            		</div>
            		<div class="form-group">
            			<label> Alamat</label>
            			<textarea class="form-control" name="alamat"><?= $alamat; ?></textarea>
            		</div>
	            </div>
	            <div class="modal-footer">
	            	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	            	<input class="btn btn-success" type="submit" name="submit" value="Simpan">
	            </div>
        	</form>
        </div>
    </div>
</div>

<br>

<div class="row">
	<div class="col-md-6 col-lg-6">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label> Nama Pengguna </label>
					<div><?= $username; ?></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label> Nama Lengkap </label>
					<div><?= $nama_lengkap; ?></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label> Email </label>
					<div><?= $email; ?></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label> No. Hp </label>
					<div><?= $hp; ?></div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label> Alamat </label>
					<div><?= $alamat; ?></div>
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