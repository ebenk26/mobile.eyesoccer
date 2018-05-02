<table class="jadwalhasil">
    <thead>
       <tr>
           <th colspan="3">
               <?= $txt_tgl; ?>
           </th>
       </tr>
    </thead>
    <tbody>
   
<?php
    $jdwl = json_decode($jdwl);


    foreach ($jdwl->data as $value) 
    {
?>
        <tr>
            <td class="pu">
                <table>
                    <tbody>
                        <tr>
                            <td colspan="3" class="lgsd"><?= $value->event; ?></td>
                        </tr>
                        <tr class="tl">
                            <td>
                                <img src="<?= $value->url_logo_a; ?>/small" alt="">
                            </td>
                            <td><?= $value->team_a; ?></td>
                            <td><?= $value->score_a; ?></td>
                        </tr>
                        <tr class="tl">
                            <td>
                                <img src="<?= $value->url_logo_b; ?>/small" alt="">
                            </td>
                            <td><?= $value->team_b; ?></td>
                            <td><?= $value->score_b; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="lgsd"><?= $value->match_location; ?></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
<?php
    }
?>
    </tbody>
</table>   