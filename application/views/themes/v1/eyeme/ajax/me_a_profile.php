
<?php 
$res = $res->data;
$id = $this->session->member['id'];
$self = ($id == $res->id) ? TRUE : FALSE;

?>

    <div class="container" style="padding-top: 30px;position: relative;overflow:  hidden;margin-bottom: 10px;">
        <div class="container" style="position: absolute;background-color: #fafafa;height:  100%;z-index:  -1;margin-top: -30px;">
            <img src="" alt="" width="100%">
        </div>
        <div class="eme-prof-pict">
            <img src="<?php echo $res->url_pic?>" alt="<?php echo $res->username?>" onerror="this.src='<?php echo DPIC?>'">
        </div>
        <div class="eme-prof-user">
            <a href="<?php echo MEPROFILE.$res->username?>"><?php echo $res->username?></a>
            
                <?php 
                if($this->session->member){
                    echo '<div id="reqfol">';
                    echo btnFol($id,$res->hasfollow,array('onclick' => 'clickfol()'),'follow-button',$self);
                    echo '</div>';
                    echo '<div id="btn-fol" action="eyeme" class="btnfollow">
                            <input type="hidden" name="fn" value="follow" class="cinput">
                            <input type="hidden" name="unamefol" value="'.$res->username.'" class="cinput">
                        </div>';
                }      
                ?>
          
        </div>
        <p class="eme-prof-desc"><?php echo $res->about?></p>
        <table class="tx-c tr-1-bold">
            <tr>
                <td><?php echo count($res->images)?></td>
                <td><?php echo $res->follower?></td>
                <td><?php echo $res->following?></td>
            </tr>
            <tr>
                <td>photo</td>
                <td>pengikut</td>
                <td>diikuti</td>
            </tr>
        </table>
    </div>
<script  type="text/javascript">
    function clickfol(){
        ajaxOnLoad('btnfollow');
    }
</script>

