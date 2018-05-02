<style type="text/css">
	.daftar-club{
		font-size: 14px;
		padding: 5px;
	}
</style>

<?php foreach ($club as $cl): ?>
	<div class="daftar-club" id="cl-<?= $cl->id_club; ?>" club="<?= $cl->name; ?>" slug="<?= $cl->slug; ?>" onclick="select_club(this)">
		<?= $cl->name; ?>
	</div>
<?php endforeach ?>
