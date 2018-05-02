
<div id="reqorders" class='loadprofile' action="eyemarket" loading="off" clean="clsmarket">
    <div id="clsmarket">
       <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadprofile');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='view_orders' class='cinput'>
    <div class="card">
        <div class="card-block">
            <h1>Pesanan Anda</h1>
            <br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-primary">
                            <th>No. Order</th>
                            <th>No. Invoice</th>
                            <th>Total Harga</th>
                            <th>Tanggal Transaksi</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

