<?php $folder = $this->config->item('themes'); ?>
<?php
if ($newsdetail){
	$dt = json_decode($newsdetail);
	$slug = $dt->data->slug;
	$subslug = $dt->data->sub_news_type;
	
	$description    = explode("<p>",$dt->data->description);
	$paragraf       = count($description);

	$tengah         = "";
	if ($paragraf%2 == 0)
	{
		$tengah     = $paragraf / 2;
	}
	else
	{
		$tengah     = ($paragraf - 1) / 2;
	}
?>
<style>
		.ads_selengkapnya{
		display:  block;
		width:  100%;
		text-align:  center;
		font-size:  .9em;
		font-weight:  600;
		color: #d8d8d8;}
		.link_ads_selengkapnya{
		padding: 8px 20px;
		border-radius: 20px;
		background-color:#eb9508;}
		.ads_selengkapnya:hover{
		color: #ffffff;}
		.link_ads_selengkapnya:hover{
		padding: 8px 20px;
		border-radius: 20px;
		background-color:#ebbc08;}
</style>
	<input id="catews" type="hidden" value="<?php echo $dt->data->news_type;?>">
	<input id="eyenews_id" type="hidden" value="<?php echo $dt->data->id;?>">
	<div class="container enews-detail">
		<h1><?php echo $dt->data->title;?></h1>
		<img src="<?php echo $dt->data->url_pic;?>" alt="<?php echo $dt->data->title;?>" width="100%">
		<div class="container profile-writer b-b-1">
			<span style="float: right;margin-right: 15px;font-size: 12px;">
				Credit : <?php echo $dt->data->credit;?>
			</span>
			<div class="container">
				<div class="img-radius img-pp p-r">
					<img src="<?php echo imgEyesoccer();?>" alt="">
				</div>
				<h3>
					<?php
						$ads=$dt->data->ads_author;
						if(empty($ads)){
							echo $dt->data->fullname;
						}
						else{
							echo "<a href='".$dt->data->ads_link."'>".$dt->data->ads_author."</a>";
						}
					?>
				</h3>
				<span><?php echo relative_time($this->library->datenormal($dt->data->publish_on)); ?> lalu - <?php echo $dt->data->news_like; ?> view</span>
				<i class="far fa-comment openComment" aria-hidden="false" style="color: #8ec429;float: right;margin-top: -35px;margin-right: 15px;font-size: 30px;"><div class="openComment"></div></i>
			</div>
			<div class="container tx-c share">
				<div class="sharethis-inline-share-buttons" data-url="<?php echo $dt->data->url;?>"></div>
				<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a81408ae45fbb001342fedf&product=inline-share-buttons"></script>
			</div>
		</div>
		<div class="container-94 news-capt">
			<p style="margin-bottom: 50px;font-size: .9em;">
				<?php // echo $dt->data->description;?>
				<?php 
                    for ($i = 0; $i < $paragraf; $i++)
                    {
                        if($i == $tengah)
                        {
                ?>
                            <div class='container box-bj'>
                                <span class="bj">Baca Juga</span>
                                
                <?php
                            foreach ($dt->data->random_news as $judul)
                            {
                ?>
				<?php
				$jt=$judul->id;
				$jdt=$dt->data->id;
				if($jt==$jdt)
				{
					$judul->display='style="display: none"';
				} 
				else
				{
					$judul->display='style="display: yes"';
				}
				?>
                                <a <?php echo $judul->display; ?> href="<?= base_url(); ?>eyenews/detail/<?= $judul->slug ?>" id="a4" class="">
                                    <p class='bj-ttl'>
                                        <strong><?= $judul->title; ?></strong>
                                    </p>      
                                </a>
                <?php
                            }
							foreach ($dt->data->random_video as $video)
                            {
                ?>
                                <a href="<?= base_url(); ?>eyetube/detail/<?= $video->slug; ?>" id="a4" class="">
                                    <p class='bj-ttl'>
                                        <strong>Eyetube | <?= $video->title; ?></strong>
                                    </p>
                                </a>
                <?php
							}
				?>
                            </div>
                <?php
                        }
                        echo "<p class='text-justify'>".$description[$i];
                    }
                ?>
			</p>
		</div>
		
		<?php
		$ads_link=$dt->data->ads_link;
		if($ads_link!=NULL OR $ads_link!=0){
			echo "<span class='ads_selengkapnya'>
			<a target='_blank' class='link_ads_selengkapnya' 
			href='".$dt->data->ads_link."'>lihat artikel asli &gt;&gt;&gt;</a>
			</span>";
		}
		else{
			echo "";
		}
		?>

				<p></p>
		<!-- IKLAN -->
		<div class="container">
			<div class="box-flyad">
				<div class="flyad">
					<div class="content-flyad">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- EyesoccerMobile 4b#NewsDetailBackGround -->
						<ins class="adsbygoogle"
							style="display:inline-block;width:300px;height:600px"
							data-ad-client="ca-pub-7635854626605122"
							data-ad-slot="5121030944"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						<!-- <span style="font-size: 7em;font-weight: 100;position: fixed;text-align: center;top: 20%;color: white;">ini iklan yaa</span> -->
						<img style="position: absolute;top: 0px;left:  0px;" src="<?= base_url(); ?>/assets/img/bwv.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<!-- EMOTICON -->
		<div class="container-94" style="background-color: white;padding: 10px 0px 20px;">
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemotproud' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='proud' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bangga.png" alt="">
					</div>
					<span><?php echo $dt->data->news_proud;?></span>
					<span>bangga</span>
				</a>
				<!--<a class="emoticon" type_emot="proud">
					<div class="img-box">
						<img src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/bangga.png" alt="">
					</div>
					<span><?php // echo $dt->data->news_proud;?></span>
					<span>bangga</span>
				</a>-->
			</div>
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemotinspired' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='inspired' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/bingung.png" alt="">
					</div>
					<span><?php echo $dt->data->news_inspired;?></span>
					<span>terinspirasi</span>
				</a>
				<!--<a class="emoticon" type_emot="inspired">
					<div class="img-box">
						<img style="margin-top:  -6px;" src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/bingung.png" alt="">
					</div>
					<span class="replace_inspired"><?php // echo $dt->data->news_inspired;?></span>
					<span>terinspirasi</span>
				</a>-->
			</div>
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemothappy' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='happy' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/gembira.png" alt="">
					</div>
					<span><?php echo $dt->data->news_happy;?></span>
					<span>gembira</span>
				</a>
				<!--<a class="emoticon" type_emot="happy">
					<div class="img-box box-img-90">
						<img src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/gembira.png" alt="">
					</div>
					<span class="replace_happy"><?php // echo $dt->data->news_happy;?></span>
					<span>gembira</span>
				</a>-->
			</div>
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemotsad' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='sad' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/sedih.png" alt="">
					</div>
					<span><?php echo $dt->data->news_sad;?></span>
					<span>sedih</span>
				</a>
				<!--<a class="emoticon" type_emot="sad">
					<div class="img-box">
						<img src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/sedih.png" alt="">
					</div>
					<span class="replace_sad"><?php // echo $dt->data->news_inspired;?></span>
					<span>sedih</span>
				</a>-->
			</div>
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemotangry' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='angry' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/suka.png" alt="">
					</div>
					<span><?php echo $dt->data->news_angry;?></span>
					<span>marah</span>
				</a>
				<!--<a class="emoticon" type_emot="angry">
					<div class="img-box">
						<img style="margin-top:  -6px;" src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/suka.png" alt="">
					</div>
					<span class="replace_angry"><?php // echo $dt->data->news_angry;?></span>
					<span>marah</span>
				</a>-->
			</div>
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemotfear' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='fear' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/takut.png" alt="">
					</div>
					<span><?php echo $dt->data->news_fear;?></span>
					<span>takut</span>
				</a>
				<!--<a class="emoticon" type_emot="fear">
					<div class="img-box">
						<img src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/takut.png" alt="">
					</div>
					<span class="replace_fear"><?php // echo $dt->data->news_fear;?></span>
					<span>takut</span>
				</a>-->
			</div>
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemotfun' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='fun' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terhibur.png" alt="">
					</div>
					<span><?php echo $dt->data->news_fun;?></span>
					<span>terhibur</span>
				</a>
				<!--<a class="emoticon" type_emot="fun">
					<div class="img-box">
						<img src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/terhibur.png" alt="">
					</div>
					<span class="replace_fun"><?php // echo $dt->data->news_fun;?></span>
					<span>terhibur</span>
				</a>-->
			</div>
			<div class="col-3 col-emoji">
				<a href='javascript:void(0)' id='reqemotshock' class='form_post' action='home' loading="off">
					<input type='hidden' name='fn' value='set_emot' class='cinput'>
					<input type='hidden' name='channel' value='eyenews' class='cinput'>
					<input type='hidden' name='type' value='shock' class='cinput'>
					<input type='hidden' name='id' value='<?php echo $dt->data->id;?>' class='cinput'>
					<div class="img-box">
						<img src="<?php echo SUBCDN."assets/$folder/" ?>img/emoji/terkejut.png" alt="">
					</div>
					<span><?php echo $dt->data->news_shock;?></span>
					<span>terkejut</span>
				</a>
				<!--<a class="emoticon" type_emot="shock">
					<div class="img-box">
						<img src="<?php // echo SUBCDN."assets/$folder/" ?>img/emoji/terkejut.png" alt="">
					</div>
					<span class="replace_shock"><?php // echo $dt->data->news_shock;?></span>
					<span>terkejut</span>
				</a>-->
			</div>
		</div>
		<div class="container-94" style="background-color: white;padding: 10px 0px 20px;">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
			 style="display:block; text-align:center;"
			 data-ad-layout="in-article"
			 data-ad-format="fluid"
			 data-ad-client="ca-pub-7635854626605122"
			 data-ad-slot="7962156598"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$(".fb-comments").attr("data-href","<?php echo $dt->data->url;?>");
			// $(".emoticon").click(function(){
				// console.log($(this).attr("type_emot"));
				// id = $("#eyenews_id").val();
				// tipe = $(this).attr("type_emot");
				// link = "eyenews";
				// tbl         = "tbl_eyenews";
				// kanal       = "eyenews";
				// sub_field   = "news_";

				// $.ajax({

				// type: "POST",
				// data: { 'type': tipe, 'id': id, 'link': link, 'tbl': tbl, 'kanal': kanal, 'sub_field': sub_field, 'select_id': 'eyenews_id' },
				// url: "<?=base_url()?>home/set_emot/" + id,
				// dataType: "json",

				// success: function (data) {
					// $(".replace_"+tipe).empty().html(data.html);
				// }

				// });
			// })
			
			$( ".crumb" ).html( "" );
			$( ".crumb" ).append( "<ul><li><a href='<?php echo base_url()?>' style='display: unset'>Home</a></li><li><a href='<?php echo base_url()?>eyenews' style='display: unset'>Eyenews</a></li><li><a href='<?php echo base_url()?>eyenews/kategori/<?php echo $dt->data->news_type?>' style='display: unset'><?php echo $dt->data->news_type?></a></li><li><a href='<?php echo base_url()?>eyenews/kategori/<?php echo $dt->data->news_type.'/'.$dt->data->sub_news_type?>' style='display: unset'><?php echo $dt->data->sub_news_type?></a></li>" );
		});
	</script>
<?php
}
?>