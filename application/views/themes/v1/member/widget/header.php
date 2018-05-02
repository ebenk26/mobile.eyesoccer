<div class="container submenu">
    <div class="submenus">
        <ul>
            <li class="<?php echo ($active=='profil' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/profile">profil</a></li>
            <li class="<?php echo ($active=='password' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/password">ubah password</a></li>
            <li class="<?php echo ($active=='logout' ? 'active' : '')?>"><a href="<?php echo base_url()?>member/logout">keluar</a></li>
        </ul>
    </div>
</div>