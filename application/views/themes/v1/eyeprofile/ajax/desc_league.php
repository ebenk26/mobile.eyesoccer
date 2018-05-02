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

<!-- <div class="container eprofile-liga-box">    
    <div class="img-medium">
        <img src="http://static.eyesoccer.id/v1/cache/images/LOGO%20UNTUK%20APLIKASI.jpg/medium" alt="">
    </div>
    <table class="table-justify">
        <tr>
            <td>level liga</td>
            <td>:</td>
            <td>tingkat pertama</td>
        </tr>
        <tr>
            <td>jumlah klub</td>
            <td>:</td>
            <td><?= $count_club->data[0]->cc; ?> klub</td>
        </tr>
        <tr>
            <td>jumlah pemain</td>
            <td>:</td>
            <td><?= $count_player->data[0]->cc; ?> pemain</td>
        </tr>
        <tr>
            <td>pemain asing</td>
            <td>:</td>
            <td><?= $count_player_foreign->data->player_foreign; ?> pemain</td>
        </tr>
        <tr>
            <td>rekor juara</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr>
            <td>umur rata-rata</td>
            <td>:</td>
            <td>-</td>
        </tr>
        <tr>
            <td>juara bertahan</td>
            <td>:</td>
            <td>-</td>
        </tr>
    </table>
</div> -->