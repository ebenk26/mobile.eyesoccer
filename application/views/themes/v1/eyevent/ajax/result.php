<style>
    .show {
        display: unset;
    }
</style>
<div class="container" style="margin-top: 50px;">
    <div id="popupKalender" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="m-event-kalender">
                    <div id="z"></div>
                    <div id="pick-date">
                        <input type="hidden" name="fn" value="pick_match" class="cinput">
                        <input type="hidden" name="date" value="" id="picked-date" class="cinput">
                        <input type="hidden" name="txtdate" value="" id="text-date" class="cinput">
                        <input type="hidden" name="page" value="hasil" class="cinput">
                    </div>
                    <button id="pick-date" class="btn-white-g form_post" type="button" style="margin-left: 8.75%;" data-dismiss="modal" action="eyevent"> 
                        Lihat
                    </button>
                    <button class="btn-white-g btn-white-g-block" type="button" data-dismiss="modal">tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="thjadwalhasil">HASIL PERTANDINGAN</h2>
        <!-- <select id="pilih-liga" class="lc">
            <option>Semua Liga</option>
            <option value="6">Liga Santri Nusantara 2017 - Seri Nasional</option>
            <option value="16">English Premier League 2017/2018</option>
            <option value="18">Italy - Seri A 2017/2018</option>
            <option value="19">France - Ligue 1 2017/2018</option>
            <option value="20">Spanish Primera Division - La Liga 2017/2018</option>
            <option value="34">Bundesliga German 2017/2018</option>
            <option value="57">UEFA Champions League 2017/2018</option>
            <option value="58">UEFA Europa League 2017/2018</option>
            <option value="74">COPPA ITALIA 2017/2018</option>
            <option value="75">COPA DEL RAY 2017/2018</option>
            <option value="89">Piala Dunia 2018 Rusia</option>
            <option value="92">Piala Presiden 2018</option>
        </select> -->
        <button type="button" class="lihat-jadwal" data-toggle="modal" data-target="#popupKalender">Pilih Tanggal Hasil Pertandingan Lainnya</button>
        <div class="box-jadwalhasil">

            <div id="body-jp">
                
            </div>

            <table class="jadwalhasil">
                <thead>
                    <tr>
                        <th colspan="3">
                            <?= date('d F Y', strtotime($kemarin["tanggalnya"])); ?> (kemarin)
                        </th>
                    </tr>
                </thead>
                <tbody>
                            
            <?php 
                if ($match_yest)
                {
                    $match_yest = json_decode($match_yest);
                    foreach ($match_yest->data as $value) 
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
                }
            ?>
                </tbody>
            </table>

            <table class="jadwalhasil">
                <thead>
                    <tr>
                        <th colspan="3">
                            <?= date('d F Y', strtotime($kemarin_lusa["tanggalnya"])); ?> (2 hari lalu)
                        </th>
                    </tr>
                </thead>
                <tbody>
                            
            <?php 
                if ($match_2yest)
                {
                    $match_2yest = json_decode($match_2yest);
                    foreach ($match_2yest->data as $value) 
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
                }
            ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<script>
    $('#z').datepicker({
        inline: true,
        altField: '#d',
        onSelect: function() { 
                tgl = $(this).datepicker('getDate');
                
                $('#hdn-date').val(tgl);
                console.log(tgl);
                var tanggal = tgl.getDate();
                
                var monthNames = ["January", "February", "March", "April", "May", "June",
                  "July", "August", "September", "October", "November", "December"
                ];
                var bulan       = tgl.getMonth() + 1;
                var nm_bulan    = monthNames[tgl.getMonth()];

                var tahun = tgl.getFullYear();

                var txt_tanggal     = tahun+"-"+bulan+"-"+tanggal;

                console.log(txt_tanggal);

                $('#picked-date').val(txt_tanggal);
                $('#text-date').val(tanggal + " " + nm_bulan + " " + tahun);
            }
    });

    // $('#d').change(function(){
    //     $('#z').datepicker('setDate', $(this).val());
    // });


    // $("#popupKalender").modal();

    // $(document).ready(function(){
    //     $("#btn-date").on("click", function(){

    //         var tanggal = tgl.getDate();
            
    //         var monthNames = ["January", "February", "March", "April", "May", "June",
    //           "July", "August", "September", "October", "November", "December"
    //         ];
    //         var bulan       = tgl.getMonth() + 1;
    //         var nm_bulan    = monthNames[tgl.getMonth()];

    //         var tahun = tgl.getFullYear();

    //         var txt_tanggal     = tahun+"-"+bulan+"-"+tanggal;

    //         $('#jp').attr('style', 'display:block');
    //         $('#ajax-tgl-jadwal').html(tanggal + " " + nm_bulan + " " + tahun);
    //         console.log(txt_tanggal);

    //         var urlnya = "<?= base_url(); ?>Eyevent/get_jadwal/"+txt_tanggal;
    //         var page = "hasil";
            
    //         $.ajax({
    //             url: urlnya,
    //             type: 'POST',
    //             dataType: 'json',
    //             data: {txt_tanggal: txt_tanggal,page: page},
    //         })
    //         .done(function(result) {

    //             // console.log(result.body);
    //             $('#body-jp').html('');
    //             $('#body-jp').append(result.body);
                
    //         });
    //     });
    // });

</script>
