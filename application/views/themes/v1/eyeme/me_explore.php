<div class="baseurl" val="<?php echo base_url()?>"></div>
<div class="container" style="margin-top: 50px;" xhide="true">
    <div class="emesearch" id="styleku">
        <form class="form_keyup" action="eyeme" id="ctt" loading="off">
            <input type="text" name="find" id="find" class="cinput">
            <input type="hidden" name="fn" value="me" class="cinput">
        </form>

        <img src="<?php echo MEMENU?>search.svg" alt="explore" id="sicon">
    </div>
        <div style="background:#fff;height: auto;"?>
            <div id="searchid">
              
            </div>
        </div>
    <dic class="exp" xhide="true">
        <div id="reqexplorelist" class='loadexplorelist' action="eyeme" loading="off" clean="clsexplorelist">
            <div class="content-explore">
                <div id='clsexplorelist'>
                    <script>
                        $(document).ready(function(){
                            $(window).on('load',function(){
                                ajaxOnLoad('loadexplorelist');
                            });

                        });
                 
                    </script>
                </div>
                <input type="hidden" name="fn" value="explorelist" class="cinput">
                <input type="hidden" name="pg" value="1" class="cinput">        
                <div class="content-explore-item gr">                
                </div>
                <div class="content-explore-item gr">                
                </div>
                <div class="content-explore-item gr">                
                </div>
                <div class="content-explore-item gr">                
                </div>
                <div class="content-explore-item gr">                
                </div>
                <div class="content-explore-item gr">                
                </div>          
            </div>  
        </div>
    </dic>  
</div>

<script type="text/javascript">
    function gambar(ref){
        location.href= '<?php echo MEURL.'img/'?>'+ ref;
    }
    function xdir(){
        location.href="<?php echo LOGINURL.'?from=eyeme'?>";
    }
    $('#find').on('focus',function(){
        $('.exp[xhide="true"]').hide();
        $('#sicon').attr('src','<?php echo MEMENU.'clear.svg'?>');
        $('#sicon').on('click',function(){
            $('.exp[xhide="true"]').show();
            $('#searchid').html('');
        })
    });

   

</script>
