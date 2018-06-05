<style>.edits.dftr-pemain span{width:100%;}</style>
<!-- <div class="x-form-daftar-pemain row" style="margin:2px 2px 10px !important; background-color:#fafafa;">
    <a href="" class="container">
        
        <div class="col-xs-4 edits">
            <div class="img-round">
                <img src="<?php echo SUBCDN."assets/img/eyeme/user-discover.png"; ?>" alt="" style="max-width:unset; max-height:unset;">
            </div>
        </div>
        <div class="col-xs-8 pd-t-19 edits dftr-pemain tx-r" style="padding: 8px 0;">
            <span class="mh-unset">Nama</span>
            <span class="mh-unset">Klub</span>
            <span class="mh-unset">Posisi</span>
        </div>
    </a>
</div> -->

<?php 
    if ($offclist)
    {
        $offclist = json_decode($offclist)->data;

?>
        <div class="container" style="border: unset;border-radius: unset;">
<?php

            foreach ($offclist as $value)
            {
?>
<div class="x-form-daftar-pemain row" style="margin:2px 2px 10px !important; background-color:#fafafa;">
    <a href="<?= base_url(); ?>eyeprofile/official_detail/<?= $value->slug; ?>" class="container">
        <div class="col-xs-4 edits">
            <div class="img-round">
                <img src="<?= $value->url_pic; ?>" alt="" style="max-width:unset; max-height:unset;">
            </div>
        </div>
        <div class="col-xs-8 pd-t-19 edits dftr-pemain tx-r" style="padding: 8px 0;">
            <span class="mh-unset"><?= $value->name; ?></span>
            <span class="mh-unset">(Klub)</span>
            <span class="mh-unset"><?= ($value->position) ? $value->position : '-'; ?></span>
        </div>
    </a>
</div>
                <!-- <tr>
                    <td> 
                        <a href="<?= base_url(); ?>eyeprofile/official_detail/<?= $value->slug; ?>">
                            <img src="<?= $value->url_pic; ?>/small" alt=""> 
                        </a> 
                    </td>
                    <td> 
                        <a href="<?= base_url(); ?>eyeprofile/official_detail/<?= $value->slug; ?>">
                            <?= $value->name; ?> 
                        </a> 
                    </td>
                    <td><img src="<?= $value->url_logo; ?>/small" alt="" style="height: unset;"></td>
                    <td><?= $value->birth_date; ?></td>
                    <td><?= ($value->position) ? $value->position : '-'; ?></td>
                    <td><?= $value->nationality; ?></td>
                    <td>-</td>
                    <td><?= $value->license; ?></td>
                </tr> -->
<?php
            }
?>
            </table>
        </div>    
<?php

        $offccount = json_decode($offccount)->data;
        $pagetotal = ceil($offccount[0]->cc/10);
        $this->session->set_userdata(array('pagetotaloffc' => $pagetotal));

        if($pagetotal > 1)
        { 
            if($this->session->userdata('pageoffc') > 1)
            {
?>
                <a href='javascript:void(0)' id='reqback' class='form_post' action='eyeprofile'>
                    <input type='hidden' name='fn' value='officiallist' class='cinput'>
                    <input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
                    <input type='hidden' name='league' value='<?php echo $league; ?>' class='cinput'>
                    <input type='hidden' name='paging' value='back' class='cinput'>
                    <span><button class="pagination-green-btn" style="float:left;">< Sebelumnya</button></span>
                </a>
<?php
            }

            if($pagetotal > $this->session->userdata('pageoffc'))
            {
?>
                <a href='javascript:void(0)' id='reqnext' class='form_post' action='eyeprofile'>
                    <input type='hidden' name='fn' value='officiallist' class='cinput'>
                    <input type='hidden' name='slug' value='<?php echo $slug; ?>' class='cinput'>
                    <input type='hidden' name='league' value='<?php echo $league; ?>' class='cinput'>
                    <input type='hidden' name='paging' value='next' class='cinput'>
                    <span><button class="pagination-green-btn" style="float:right;">Selanjutnya ></button></span>
                </a>
<?php                
            }
        }
    }
?>