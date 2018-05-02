<!-- MENU BOTTOM EYEME -->
<div class="menu-eme">
    <?php 
    //show display picture if user has been login 
    $DPIC['src'] = ($this->session->member ? $this->session->member['url_pic'].'/thumb' : DPIC);
    $DPIC['alt'] = ($this->session->member ? $this->session->member['username'] : 'photo profile');

    $list  = array(
                anchor(MEHOME,img(array('src' => MEMENU.'home.svg','alt'=> 'home'))),
                anchor(MEEXPLORE,img(array('src' => MEMENU.'search.svg','alt'=> 'explore'))),
                anchor('none',img(array('src' => MEMENU.'add-post.svg','alt' => 'upload')),array('class'=> 'upl')),
                anchor(MENOTIF,img(array('src' => MEMENU.'notification.svg','alt' => 'Notification'))),
                anchor(MEPROFILE.$this->session->member['username'],img($DPIC))
            );

    echo ul($list)?>
   
</div>

<?php $this->load->view('themes/v1/eyeme/me_upload')?>

<script>
    function showfile(file) {
        var reader = new FileReader(file);
        reader.readAsDataURL(file);

        reader.onload = function(e) {
            $('.upl-img').attr('src',e.target.result);
        }
    }
    $('.upl').click(function(e) {
        /* Act on the event */
        e.preventDefault();
        $('#upload').click();
        $('#upload').on('change',function(){
            $('.container[xhide="true"]').hide();
            var file = this.files[0];
                showfile(file);
            $('#imgtemplate').show();

        })
    });
    
</script>