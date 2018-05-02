<?php 
$page = array($slug, $subslug);
echo set_breadcrumb("eyenews",$page); 
?>
<div id="reqsubcatlist" class='loadsubcatlist' action="eyenews" loading="off" clean="clssubcatlist">
	<div id='clscatlist'>
		<script>
			$(document).ready(function(){
				$(window).on('load',function(){
					ajaxOnLoad('loadsubcatlist');
				});
			});
		</script>
	</div>
	<input type='hidden' name='fn' value='subcategorylist' class='cinput'>
    <input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
    <!-- <select id="pilih-liga" class="lc">
        <option>Semua Liga</option>
        <option value="6">Liga Santri Nusantara 2017 - Seri Nasional</option>
        <option value="16">English Premier League 2017/2018</option>
        <option value="18">Italy - Seri A 2017/2018</option>
        <option value="19">France - Ligue 1 2017/2018</option>
        <option value="20">Spanish Primera Division - La Liga 2017/2018</option>
        <option value="34">Bundesliga German 2017/2018</option>
        <option value="57">UEFA Champions League 2017/2018</option>
        <option value="58">UEFA Europa League 2017/2018</option>
        <option value="74">COPPA ITALIA 2017/2018</option>
        <option value="75">COPA DEL RAY 2017/2018</option>
        <option value="89">Piala Dunia 2018 Rusia</option>
        <option value="92">Piala Presiden 2018</option>
    </select> -->
    <!-- <div class="container" style="margin-top:48px;">
        <div class="crumb" style="margin: unset;">
            <span><a href="<?php echo base_url().$slug.'/'.$subslug?>" style="display: unset">Liga Indonesia</a></span>
            <span><a href="http://localhost/mob.eyesoccer.id/eyenews" style="display: unset">Liga Inggris</a></span>
        </div>
    </div> -->
</div>
<!-- EYENEWS -->
<div class="container">
<div class="etube-home enews" style="padding: unset;">
    <div id="reqcatlist" class='loadcatlist' action="eyenews" loading="off" clean="clscatlist">
        <div id='clscatlist'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadcatlist');
                    });
                });
            </script>
        </div>
        <input type='hidden' name='fn' value='categorylist' class='cinput'>
        <input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
        <input type='hidden' name='subslug' value='<?php echo $subslug; ?>' class='cinput'>
        <a href="">
        <div class="etube-mobile-thumb fafa gr" style="height:  200px;">
            <img src="" alt="" height="200px">
            <div class="enews-title gr">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="">
        <div class="etube-mobile-thumb fafa gr" style="height:  200px;">
            <img src="" alt="" height="200px">
            <div class="enews-title gr">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
        <a href="">
        <div class="etube-mobile-thumb fafa gr" style="height:  200px;">
            <img src="" alt="" height="200px">
            <div class="enews-title gr">
                <h2>title Video title Video title Video title Video title Video</h2>
                <span>2 jam lalu - 123 view</span>                
            </div>
        </div>
        </a>
    </div>
</div>
</div>