<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Invoice EyeMarket</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/js/eyemarket/invoice/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>assets/js/eyemarket/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Custom styling plus plugins -->
        <link href="<?php echo base_url(); ?>assets/js/eyemarket/invoice/custom.min.css" rel="stylesheet">
</head>
<body>
    
    <?php
        // var_dump($model);exit();
        if ($model->status == 3)
        {
    ?>
            <img src="<?php echo base_url(); ?>assets/js/eyemarket/lunas.png" style="z-index: 999;
            position: absolute;
            margin: 65% 22%;
            width: 59%;
            transform: rotate(13deg);
            opacity: 0.2;">
    <?php        
        }
    ?>


    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="background-color: white;padding: 20px 20px;margin: 10px 10px;">
                        <h1><i class="fa fa-globe"></i> Invoice.</h1>
                        <b>No. <span style="font-size: 16px;"><?= $model->no_invoice; ?></span></b>
                        <h2>Tanggal <?= date('d F Y',strtotime($model->order_date)); ?></h2>
                        <hr>
                        No. Order: <b><span style="font-size: 14px;"><?= $model->no_order; ?></span></b>
                        <br>
                        Waktu Jatuh Tempo: <b><span style="font-size: 14px;"><?= date('d F Y H:i:s',strtotime($model->expired_date)); ?></span></b>
                        <br>
                        <br>
                        <caption>Detail Pesanan</caption>
                        
                        <?php 
                            $no = 1;
                            foreach ($cart as $value)
                            {
                        ?>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><?= $no; ?></th>
                                            </tr>
                                            <tr style="font-weight: bold;">
                                                <th>Produk</th>
                                                <td>: <?= $value['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kuantitas</th>
                                                <td>: <?= $value['jumlah']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Toko</th>
                                                <td>: <?= $value['toko']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Catatan</th>
                                                <td>: <?= $value['catatan']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Harga Satuan</th>
                                                <td>: Rp. <?= number_format($value['harga'],0,',','.'); ?></td>
                                            </tr>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td>: Rp. <?= number_format($value['total'],0,',','.'); ?></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                        <?php
                                $no++;
                            }
                        ?>
                        
                        <br>
                        <caption>Metode Pengiriman</caption>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr style="font-weight: bold;">
                                        <th>Kurir</th>
                                        <td>: <?= $model->kurir; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Berat Keseluruhan</th>
                                        <td>: <?= $model->berat_all; ?> gram</td>
                                    </tr>
                                    <tr>
                                        <th>Penerima</th>
                                        <td>: <?= $model->penerima; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: <?= $model->alamat; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?= $model->kota; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?= $model->kecamatan; ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><?= $model->provinsinya; ?></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                         </p> -->
                         <p class="lead">Total Keseluruhan</p>
                         <div class="table-responsive">
                             <table class="table">
                                 <tbody>
                                     <tr>
                                         <th style="width:50%">Subtotal:</th>
                                         <td>Rp. <?= number_format($model->harga,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                         <th>Ongkir <strong> JNE </strong></th>
                                         <td>Rp. <?= number_format($model->ongkir,0,',','.'); ?></td>
                                     </tr>
                                     <tr>
                                         <th>Total:</th>
                                         <td> 
                                             <span style="font-size: larger; font-weight: bolder;">
                                                 <mark>Rp. <?= number_format($model->harga_all,0,',','.'); ?></mark>
                                             </span>
                                          </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/eyemarket/invoice/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/js/eyemarket/invoice/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/js/eyemarket/invoice/fastclick.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/eyemarket/invoice/custom.min.js"></script>
    
</body>
</html>
