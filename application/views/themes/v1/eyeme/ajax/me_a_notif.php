
    <div class="info-box-notif" style="display:block">
        <div class="info-box-notif-content">

            <?php 
            #p($res->data);
                foreach($res->data as $k => $v){


            ?>
                <table onclick="clicknotif(this.id)" id="<?php echo ($v->id_img == null ? "fol-".$v->username : $v->id_img)?>">
                    <tr>
                        <td>
                            <img src="<?php echo ($v->url_pic == null ? DPIC : $v->url_pic)?>">
                        </td>
                        <td>
                            <a href="<?php MEPROFILE.$v->username?>"><?php echo $v->username?></a>

                            <?php echo (substr($v->notif_type,0,3) == 'LIK' ? 'Menyukai Foto Anda' :
                                        (substr($v->notif_type,0,3) == 'COM' ? 'Mengomentari Foto Anda' : 'Mengikuti Anda'))?>
                            <span><?php echo getTime(getDistance(NOW,$v->last_update))['timeString']?></span>
                        </td>
                        <td>
                            <?php echo 
                            (substr($v->notif_type,0,3) == 'COM' || 
                            substr($v->notif_type,0,3) == 'LIK' ? '<img src="'.$v->url_img.'/small'.'">' : '')?>
                            
                    </tr>
                </table>
            <?php }?>
        </div>
    </div>
    <script>
    function clicknotif(ref){
 
        if(ref.substr(0,3) == 'fol'){
            ref = ref.split('-');
            location.href='<?php echo MEPROFILE?>' + ref[1]; 
        }
        else{
            location.href='<?php echo MEIMGUSR?>' + ref;}

    }
    </script>