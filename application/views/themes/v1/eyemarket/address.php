
<div class="row">

    <div class="col-md-12">
        <br>
        <div class='crumb' style="margin-bottom: 0px;">
            <ul>
                <li><a href='<?= base_url(); ?>' style='display: unset'>Home</a></li>
                <li><a href='<?= base_url(); ?>/eyemarket' style='display: unset'>EyeMarket</a></li>
                <li style='cursor:default;'>Keranjang</li>
            </ul>
        </div>
    </div>

    <div class="col-md-9 clearfix" id="checkout">

        <div class="box">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#"><i class="fas fa-map-marker-alt"></i><br>Alamat</a>
                </li>
                <li class="disabled"><a href="#"><i class="fas fa-truck"></i><br>Metode Pengiriman</a>
                </li>
                <li class="disabled"><a href="#"><i class="far fa-money-bill-alt"></i><br>Metode Pembayaran</a>
                </li>
                <li class="disabled"><a href="#"><i class="fas fa-eye"></i><br>Ulasan Pesanan</a>
                </li>
            </ul>

            <div id="reqaddress" class='loadaddress' action="eyemarket" loading="off" clean="clsmarket">
                <div id='clsmarket'>
                    <script>
                        $(document).ready(function(){
                            $(window).on('load',function(){
                                ajaxOnLoad('loadaddress');
                            });
                        });
                    </script>
                </div>
                <input type='hidden' name='fn' value='view_address' class='cinput'>
            </div>
                
        </div>
        <!-- /.box -->


    </div>
    <!-- /.col-md-9 -->

</div>
<!-- /.row -->