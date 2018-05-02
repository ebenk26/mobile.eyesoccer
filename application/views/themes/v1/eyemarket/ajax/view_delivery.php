
<form action="<?= base_url(); ?>eyemarket" class="form_basic" loading="off">
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
        <?php 
            if ($ctc != NULL || $reg != NULL)
            {
        ?>
                <div class="box shipping-method">

                    <h4>JNE Reguler</h4>

                    <p>JNE Reguler adalah paket reguler yang ditawarkan JNE. Kecepatan pengiriman tergantung dari lokasi pengiriman dan lokasi tujuan. Untuk kota yang sama, umumnya memakan waktu 2-3 hari.</p>
                    Tujuan : <strong><?= $alamat; ?></strong>
                    <br>
                    <strong style="margin-left: 58px;"><?= $kecamatan; ?></strong>
                    <br>
                    <strong style="margin-left: 58px;"><?= $kota; ?></strong>
                    <br>
                    <strong style="margin-left: 58px;"><?= $provinsi; ?></strong>
                    <br>
                    Ongkir : <strong> Rp. <?php echo ($ctc != NULL) ? number_format($ctc,0,',','.') : number_format($reg,0,',','.'); ?> </strong>

                    <div class="box-footer text-center">
                        <input type="radio" name="delivery" value="1">
                        <input type="hidden" name="ongkir1" value="<?php echo ($ctc != NULL) ? $ctc: $reg; ?>">
                    </div>
                </div>
        <?php        
            }
        ?>
                
            </div>
            <div class="col-sm-6">
        <?php
            if ($ctcyes != NULL || $yes != NULL)
            {
        ?>
                <div class="box shipping-method">

                    <h4>JNE YES</h4>

                    <p>JNE YES adalah paket dengan prioritas pengiriman tercepat yang ditawarkan JNE. Hanya saja perlu diperhatikan kecepatan barang diterima juga dipengaruhi oleh kecepatan penjual melakukan pengiriman barang.</p>
                    Tujuan : <strong><?= $alamat; ?></strong><br>
                    <strong style="margin-left: 58px;"><?= $kecamatan; ?></strong>
                    <br>
                    <strong style="margin-left: 58px;"><?= $kota; ?></strong>
                    <br>
                    <strong style="margin-left: 58px;"><?= $provinsi; ?></strong>
                    <br>
                    Ongkir : <strong> Rp. <?php echo ($ctcyes != NULL) ? number_format($ctcyes,0,',','.') : number_format($yes,0,',','.'); ?> </strong>

                    <div class="box-footer text-center">
                        <input type="radio" name="delivery" value="2">
                        <input type="hidden" name="ongkir2" value="<?php echo ($ctcyes != NULL) ? $ctcyes: $yes; ?>">
                    </div>
                </div>
        <?php        
            }
        ?>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.content -->

    <div class="box-footer">
        <div class="pull-left">
            <a href="<?=base_url()?>eyemarket/order_address/<?= $id_member; ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembeli ke Data Alamat</a>
        </div>
        <div class="pull-right">
            <button type="submit" class="btn btn-template-main">Lanjut ke Metode Pembayaran<i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <input type="hidden" name="fn" value="order_delivery">
    <input type="hidden" name="id_member" value="<?= $id_member; ?>">
</form>