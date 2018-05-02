    <!-- CATEGORY -->
    <!--<div class="container xc" style="margin-top: 50px;">
		<table>
			<tr>
				<td>
					<div class="cat-x">
						<ul>
							<li>
                                <button onclick="dd()">Kategori<i class="fas fa-sort-down"></i></button>
                                <ul id="ddcl">
									<li>
										<a href="<?= base_url(); ?>eyetube/kategori/EyeSoccer-Fact">Eyesoccer Fact</a>
									</li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Flash">Eyesoccer Flash</a>
                                    </li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/Eyesoccerpedia">Eyesoccer Pedia</a>
                                    </li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/Match-Preview">Match Preview</a>
                                    </li>
									<li>    
                                        <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Hits">Eyesoccer Hits</a>
                                    </li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/Profile-SSB">Profil SSB</a>
                                    </li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/Eyesoccer-Star">Eyesoccer Star</a>
                                    </li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/Eye-Soccer-Funny">Eyesoccer Funny</a>
                                    </li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/VIDEO-KAMU">Video Kamu</a>
                                    </li>
									<li>
                                        <a href="<?= base_url(); ?>eyetube/kategori/Highlight">Highlight</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</td>
				<td class="container over-x" style="max-width: 62vw !important;height: max-content;margin-bottom: -23px;">
					<div class="trend w-max" style="margin-top: 7px;">
						<div id="reqtrend" class='loadtrend' action="eyetube" loading="off" clean="clstrend">
							<div id='clstrend'>
								<script>
									$(document).ready(function(){
										$(window).on('load',function(){
											ajaxOnLoad('loadtrend');
										});
									});
								</script>
							</div>
							<input type='hidden' name='fn' value='trending' class='cinput'>
							<a class="gr" href="">Choirul Huda</a>
							<a class="gr" href="">IndonesiaU-19</a>
							<a class="gr" href="">Egy Maulana Vikri</a>
							<a class="gr" href="">Persib</a>
						</div>
					</div>
				</td>
			</tr>
		</table>
    </div>-->
    
<!-- EYETUBE -->
<div id="reqtube" class='loadtube' action="eyetube" loading="off" clean="clstube">
    <div id='clstube'>
        <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadtube');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='list_tube' class='cinput'>
    <div class="etube-home" style="padding: unset;">
    
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb">
                <div class="img gr" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori gr" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;" class="gr">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;" class="gr">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb fafa">
                <div class="img gr" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori gr" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;" class="gr">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;" class="gr">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb fafa">
                <div class="img gr" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori gr" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;" class="gr">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;" class="gr">2 jam lalu - 123 view</span>
            </div>
        </a>
        <a href="etube-detail.html">
            <div class="etube-mobile-thumb fafa">
                <div class="img gr" style="background-color: #f2f2f2;">
                    <!-- <img src="http://modernartbuyer.com/wp-content/uploads/2014/10/Aqueous-II-278-web.jpg" alt="">                 -->
                </div>
                <span class="kategori gr" style="visibility: hidden;">Liga Indonesia</span>
                <h2 style="visibility: hidden;" class="gr">title Video title Video title Video title Video title Video</h2>
                <span style="visibility: hidden;" class="gr">2 jam lalu - 123 view</span>
            </div>
        </a>
    </div>
</div>
<!-- <div class="menu-bottom-etube">
    <i class="material-icons">home</i>
    <i class="material-icons">grade</i>
    <i class="material-icons">grade</i>
    <i class="material-icons">grade</i>
</div> -->
<div class="box-notif">
    <div class="box-notif-content">
        <a href="">Tambahkan ke</a>
        <a href="">Laporkan</a>
    </div>
</div>