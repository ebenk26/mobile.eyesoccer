<?php 

$imglist = json_decode($imglist);
	foreach($imglist->data as $k => $v){
        $hasLike = 0 ;

		if(count($v->likes) > 0 ){

            foreach($v->likes as $a => $b){  
                if($b->username == $this->session->member['username']){
                    $hasLike  = 1;
                    break;
                }
            }
            
        }
?>	
    <div class="container eme-post-section" xhide="true">
        <div class="container emepost">
            <a href="<?php echo $this->library->urltomob($v->url); ?>">
            <div class="img-usr">

                <img src="<?php echo $v->url_pic.'/thumb'; ?>" alt="<?php echo $v->username?>">

            </div>
            <span><?php echo $v->username?></span>
            </a>
            <?php
                if($this->session->member['username'] == $v->username){
                    echo '<div class="rm-'.$v->id.'" id="'.$v->id.'" action="eyeme">';
                    echo '<input type="hidden" name="fn" value="delete_img" class="cinput">';
                    echo '<input type="hidden" name="uid" value="'.$v->id.'" class="cinput">';
                    echo '<input type="hidden" name="refer" value="home" class="cinput">';
                    echo '<a style="float:right"  ref="form_post" id="rm-'.$v->id.'" action="eyeme" loading="off" onclick="deleteconfrm(this.id)"><i class="material-icons more display-box-notif" >delete</i></a>';
                    echo '</div>';
                }
            ?>
            
        </div>
        <div class="eme-img-content">
            <img src="<?php echo $v->url_img?>" alt="<?php echo $v->img_caption?>">
        </div>
        <div class="container-eme-like">
            <ul>
                <li>
                     <a class="like form_post" form="<?php echo 'lk'.$v->id?>" action="eyeme"> 
                        <span id="<?php echo substr($v->id,0,3).'clss'?>">
                            <img src="<?php echo MEMENU.($hasLike == 1 ? 'love-active.svg' : 'love.svg') ?>">
                            <span class="adbo"><?php echo ($v->likecount == 0 ? '' : $v->likecount)?></span>
                <span id="<?php echo 'lk'.$v->id?>" action="eyeme" loading="off">
                    <input type="hidden" class="cinput" name="fn" value="gtlike">
                    <input type="hidden" class="cinput" name="uid" value="<?php echo $v->id?>">
                    <input type="hidden" class="cinput" name="act" value="<?php echo $hasLike == 0 ? 'like' : 'unlike'?>">
                    <input type="hidden" class="cinput" name="clss" value="<?php echo substr($v->id,0,3).'clss'?>">

                </span>
                            
                        </span> 
                    </a>        

                    <a  class="form_post"  form="<?php echo 'ab'.$v->id?>" action="eyeme">   
                        <img class="openComment" src="<?php echo base_url()?>assets/img/menu/eyeme/comment.svg" alt="">
                        <span class="adbo c<?php echo $v->id?>"><?php echo ($v->commentcount == 0 ? '' : $v->commentcount)?></span>

                    </a>
                    
                    <div id="<?php echo 'ab'.$v->id?>">
                        <input type="hidden" name="fn" value="gtcomment" class="cinput">
                        <input type="hidden" name="uid" value="<?php echo $v->id?>" class="cinput">

                    </div>

               
                    <div id="<?php echo substr($v->id,0,3)?>" class="loadlike <?php echo substr($v->id,0,3)?>" action="eyeme" loading="off">
                        <input type="hidden" class="cinput" name="fn" value="gtlike">
                        <input type="hidden" class="cinput" name="uid" value="<?php echo $v->id?>">
                      

                    </div>
                   
                </li>
            </ul>
        </div>
       
        <ul class="comment-eme">
            <li><span class="eme-time-post">
                <?php  echo  getTime(getDistance(NOW,$v->last_update))['timeString']?>     
                </span>
            </li>
        </ul>
    </div>

 <?php } ?>
 <script>
    function deleteconfrm(id){

        var v = window.confirm('Kamu yakin ingin hapus');
        if(v == true){
            ajaxOnLoad(id);
        }
    }
    $('.form_keyup').keypress(function(event) {
        /* Act on the event */
        if(keyCode == 13){
        alert('test');
        }
    });
    
</script>