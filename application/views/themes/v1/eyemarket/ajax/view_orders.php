
<div class="card">
    <div class="card-block">
        <h1>Pesanan Anda</h1>
        <br>
        <?php 
            if ($model == NULL)
            {
        ?>
                <h4>Belum ada pesanan</h4>
                <a href="<?= base_url(); ?>eyemarket" class="btn btn-info">
                    Ayo Belanja
                </a>
        <?php        
            }
            else
            {
        ?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <?php
                                foreach ($model as $order)
                                {
                                    $status     = "";

                                    if ($order['status'] == 0)
                                    {
                                        $status     = '<label class="badge badge-warning">Masih dalam Keranjang</label>';
                                    }
                                    else
                                    if ($order['status'] == 1)
                                    {
                                        $status     = '<label class="badge badge-primary">Menunggu Pembayaran</label>';
                                    }
                                    else
                                    if ($order['status'] == 2)
                                    {
                                        $status     = '<label class="badge badge-info">Menunggu Konfirmasi Admin</label>';
                                    }
                                    else
                                    if ($order['status'] == 3)
                                    {
                                        $status     = '<label class="badge badge-success">Pembayaran Lunas</label>';
                                    }
                            ?>
                                    <tr class="text-primary">
                                        <th>No. Order</th>
                                        <td> 
                                            <?= $order['no_order']; ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No. Inovice</th>
                                        <td> 
                                            <?= $order['no_invoice']; ?> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Total Harga</th>
                                        <td> 
                                            Rp. <?= number_format($order['harga_all'],0,',','.'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Transaksi</th>
                                        <td> 
                                            <?= date('d F Y H:i:s',strtotime($order['order_date'])); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td> 
                                            <?= $status; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td> 
                                            <a href="<?= base_url(); ?>eyemarket/invoice/<?= $order['no_order']; ?>" class="btn btn-primary btn-sm" target="_blank">Lihat Invoice</a>
                                            <?php
                                                if ($order['status'] == 1)
                                                {
                                            ?>
                                                    <a href="<?= base_url(); ?>eyemarket/konfirmasi/<?= $order['no_order']; ?>" class="btn btn-success btn-sm">Konfirmasi Pembayaran</a>
                                            <?php 
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr></tr>
                            <?php
                                }
                            ?>
                        </thead>
                    </table>
                </div>
        <?php
            }
        ?>
        
    </div>
</div>