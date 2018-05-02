<form action="<?= base_url(); ?>eyemarket" class="form_basic" loading="off">

    <div class="content" style="margin-left: 23px;margin-right: 23px;">
        <div class="row">

            <h4>Transfer</h4>

    <?php
        foreach ($bank as $banknya)
        {
    ?>
            <div class="col-sm-6">
                <div class="box payment-method" style="text-align: center;">

                    <p><?= $banknya['bank']; ?></p>
                    <img style="height: 40px;" src="https://www.eyesoccer.id/assets/eyemarket/<?= $banknya['logo']; ?>">
                    <br>
                    <br>
                    <p><strong><?= $banknya['rekening']; ?></strong></p>
                    <p>a/n <?= $banknya['nama_pemilik']; ?></p>

                    <div class="box-footer text-center" style="margin: unset;">
                        <input type="radio" name="payment" value="<?= $banknya['id']; ?>">
                    </div>
                </div>
            </div>
    <?php        
        }
    ?>

                
        </div>
        <!-- /.row -->

    </div>
    <!-- /.content -->

    <div class="box-footer">
        <div class="pull-left">
            <a href="<?=base_url()?>eyemarket/order_delivery/<?= $id_member; ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali ke Metode Pengiriman</a>
        </div>
        <div class="pull-right">
            <button type="submit" class="btn btn-template-main">Lanjut Ke Review Pesanan<i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <input type="hidden" name="fn" value="order_payment">
    <input type="hidden" name="id_member" value="<?= $id_member; ?>">
</form>