<div class="container bg-g">
    <div class="t-tab">
        <div id='ajax-tgl-jadwal'>
            <?= $txt_tgl; ?>
        </div>
    </div>
</div>
<div>
    
<?php
    if ($jdwl)
    {
        $jdwl = json_decode($jdwl);
    
        foreach ($jdwl->data as $value) 
        { 
?>
    		<table class="table border-b td3">
    		    <tbody>
                    <tr>
                        <td class="tx-r" style="width: 30%;"> 
                            <?= $value->team_a; ?>
                        </td>
                        <td class="tx-c"> 
                        	<img src="<?= $value->url_logo_a; ?>/small" alt="" style="width:20px;position:relative;top:-5px;">
                        </td>
                        <td class="tx-c" style="width:15%;">
                            <?= $value->match_location; ?>
                            <br>
                            <?= $value->match_schedule; ?>
                            <span class="t-live"><?= $value->match_live; ?></span>
                        </td>
                        <td class="tx-c">
                        	<img src="<?= $value->url_logo_b; ?>/small" alt="" style="width:20px;position:relative;top:-5px;"> 
                        </td>
                        <td class="tx-l" style="width: 30%;">
                            <?= $value->team_b; ?>
                        </td>
                    </tr>
    		    </tbody>
    		</table>
<?php
        }
    }
?>

</div>
