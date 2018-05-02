<?php

$me = json_decode($eyeme);
foreach($me->data as $k => $v){
	$url = $v->url_img.'/small';
	$replace = str_replace('https://www', 'http://m', $v->url);

	echo  '<a href="'.($this->session->member ? $replace : LOGINURL.'?from=eyeme').'">
			<div class="eme-box">
        		<img src="'.$url.'" alt="'.$v->img_caption.'">
    	 	</div>
    	 </a>';

}

?>