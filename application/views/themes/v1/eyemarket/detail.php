<div style="margin-top:57px; width: 100vw;">
	<div id="reqdetail" class='loaddetail' action="eyemarket" loading="off" clean="clsmarket">
	    <div id='clsmarket'>
	        <script>
	            $(document).ready(function(){
	                $(window).on('load',function(){
	                    ajaxOnLoad('loaddetail');
	                });
	            });
	        </script>
		</div>
		<div class="container gr" style="padding: 0px; height: 300px;">

		</div>
	    <input type='hidden' name='fn' value='market_detail' class='cinput'>
	    <input type='hidden' name='slug' value='<?= $slug; ?>' class='cinput'>
	</div>
</div>
