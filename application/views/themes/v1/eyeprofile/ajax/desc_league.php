<?php 
    if($klublist)
    {
        $klublist = json_decode($klublist);
        $klubcount = json_decode($playercount);
    }
?>

<table class="content-tab-eprofile">
    <tr>
        <td>Jumlah Klub</td>
        <td>: <?= $klublist->data[0]->cc; ?></td>
    </tr>
    <tr>
        <td>Jumlah Pemain</td>
        <td>: <?= $klubcount->data->player_local; ?></td>
    </tr>
    <tr>
        <td>Pemain Asing</td>
        <td>: <?= $klubcount->data->player_foreign; ?></td>
    </tr>
</table>

