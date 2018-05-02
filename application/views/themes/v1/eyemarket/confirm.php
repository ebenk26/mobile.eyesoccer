<div id="reqconfirm" class='loadprofile' action="eyemarket" loading="off" clean="clsmarket">
    <div id="clsmarket">
       <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadprofile');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='view_confirm' class='cinput'>
    <input type='hidden' name='no_order' value='<?= $no_order; ?>' class='cinput'>
    <div class="card">
        <div class="card-block">
            <h1>Konfirmasi Pesanan</h1>
            <br>
        </div>
    </div>
</div>