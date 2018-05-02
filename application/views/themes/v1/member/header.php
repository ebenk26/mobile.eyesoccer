<div class="container nav-dashboard">
	<div class="nav-dash">
		<ul>
			<a href="<?php echo base_url("member"); ?>"><li class="<?php echo ($active=='home' ? 'active' : '')?>">Home</li></a>
            <?php
                if ($member->id_player > 0) {
                    ?>
                    <a href="<?php echo base_url("member/player/?tab=profil&uid=".md5($member->id_player)); ?>">
                        <li class="<?php echo ($active=='pemain' ? 'active' : '')?>">Pemain</li>
                    </a>
                    <?php
                } else {
                    if ($member->id_club > 0) {
                        ?>
                        <a href="<?php echo base_url("member/klub"); ?>">
                            <li class="<?php echo($active == 'klub' ? 'active' : '') ?>">Klub</li>
                        </a>
                        <?php
                    }
                }
            ?>

			<!--<a href="<?php /*echo base_url("member/eyeme"); */?>"><li class="<?php /*echo ($active=='eyeme' ? 'active' : '')*/?>">Eyeme</li></a>
			<a href="<?php /*echo base_url("member/eyetube"); */?>"><li class="<?php /*echo ($active=='eyetube' ? 'active' : '')*/?>">Eyetube</li></a>
			<a href="<?php /*echo base_url("member/tulisan_kamu"); */?> "><li class="<?php /*echo ($active=='tulisan_kamu' ? 'active' : '')*/?>">Tulisan Kamu</li></a>
			<a href="<?php /*echo base_url("member/analytics"); */?>"><li class="<?php /*echo ($active=='analytics' ? 'active' : '')*/?>">Analytics</li></a>-->
		</ul>
	</div>
</div>