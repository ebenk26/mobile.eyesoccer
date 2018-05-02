<div class="container submenu">
	<div class="submenus">
		<ul>
            <li class="<?php echo ($active=='klub' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/klub">info klub</a></li>
            <li class="<?php echo ($active=='pemain' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/player">pemain</a></li>
            <li class="<?php echo ($active=='ofisial' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/official">ofisial</a></li>
            <li class="<?php echo ($active=='karir' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/karir">prestasi</a></li>
            <li class="<?php echo ($active=='galeri' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/galeri">galeri</a></li>
            <li class="<?php echo ($active=='verifikasi' ? 'active' : '')?>">
                <a href="<?php echo base_url()?>member/verifikasi" style="position: relative;margin-right: 30px;">
                    verifikasi<span id="reqverifycount" class="loadverifycount black-notif" action="member" loading="off" clean="clsverifycount">
                        0
                        <input type='hidden' name='fn' value='verifycount' class='cinput'>
                        <div id='clsverifycount'>
                            <script>
                                $(document).ready(function () {
                                    $(window).on('load', function () {
                                        ajaxOnLoad('loadverifycount');
                                    });
                                });
                            </script>
                        </div>
                    </span>
                </a>
            </li>
            <!--<li class="<?php /*echo ($active=='verifikasi' ? 'active' : '')*/?>"><a href="<?php /*echo base_url()*/?>member/verifikasi">verifikasi</a></li>
            <li class="<?php /*echo ($active=='daftar_liga' ? 'active' : '')*/?>"><a href="<?php /*echo base_url()*/?>member/regliga">daftar liga</a></li>-->
		</ul>
	</div>
</div>