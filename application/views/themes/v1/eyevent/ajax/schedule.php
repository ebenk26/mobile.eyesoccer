
<br>
<br>
<br>
<div id="popupKalender" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="m-event-kalender">
                <div id="z"></div>
                <div id="pick-date">
                    <input type="hidden" name="fn" value="pick_match" class="cinput">
                    <input type="hidden" name="date" value="" id="picked-date" class="cinput">
                    <input type="hidden" name="txtdate" value="" id="text-date" class="cinput">
                    <input type="hidden" name="page" value="jadwal" class="cinput">
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
    <h2 class="thjadwalhasil">JADWAL PERTANDINGAN</h2>
    <!-- <select id="pilih-liga" class="lc">
        <option>Semua Liga/Kompetisi</option>
        <?php 
            foreach ($all_liga as $value)
            {
        ?>
                <option value="<?= $value['id_event']; ?>">
                    <?= $value['title']; ?>
                </option>
        <?php
            }
        ?>
        
    </select> -->
    <button type="button" class="lihat-jadwal" data-toggle="modal" data-target="#popupKalender" style="
    margin-bottom: 20px;
">Pilih Tanggal Jadwal Lainnya</button>

    <div id="body-jp">
                
    </div>
    
    <div class="container bg-g">
        <div class="t-tab">
            <div id='boxtab'>
                <div class="day-choose">
                    <a class="day-choose t-active" id="jadwal-today" onclick="tabmenu(this.id, 'a', 'table', 'day-choose', 't-active')" active="true">
                        Hari ini
                        <span><?= date('d F', strtotime($hari_ini["tanggalnya"])); ?></span>
                    </a>
                </div>
                <div class="day-choose">
                    <a class="day-choose" id="jadwal-tmrw" onclick="tabmenu(this.id, 'a', 'table', 'day-choose', 't-active')">
                        Besok
                        <span><?= date('d F', strtotime($besok["tanggalnya"])); ?></span>
                    </a>
                </div>
                <div class="day-choose">
                    <a class="day-choose" id="jadwal-lusa" onclick="tabmenu(this.id, 'a', 'table', 'day-choose', 't-active')">
                        Lusa
                        <span><?= date('d F', strtotime($lusa["tanggalnya"])); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <table class="table border-b" id="jadwal-today">
        <tbody>
        <?php
            if ($match_today) {
                $match_today = json_decode($match_today);
                foreach ($match_today->data as $value) {
                    ?>
                    <tr>
                        <td class="tx-r" style="width: 30%;"><?= $value->team_a; ?>
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <!-- </a> -->
                        </td>
                        <td class="tx-c"><img style="width:20px;position:relative;top:-5px;" src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>"></td>
                        <td class="tx-c" style="width:15%;">
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?>
                            <span class="t-live"><?= $value->match_live; ?></span>
                        </td>
                        <td class="tx-c"><img style="width:20px;position:relative;top:-5px;" src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>"></td>
                        <td class="tx-l" style="width: 30%;">
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <?= $value->team_b; ?>
                            <!-- </a> -->
                        </td>
                    </tr>
                    <?php
                }
            }
        ?>
        </tbody>
    </table>
    <table class="table border-b" id="jadwal-tmrw" style="display: none;">
        <tbody>
        <?php
            if ($match_tomorrow) {
                $match_tomorrow = json_decode($match_tomorrow);
                foreach ($match_tomorrow->data as $value) {
                    ?>
                    <tr>
                        <td class="tx-r" style="width: 30%;"><?= $value->team_a; ?>
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <!-- </a> -->
                        </td>
                        <td class="tx-c"><img style="width:20px;position:relative;top:-5px;" src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>"></td>
                        <td class="tx-c" style="width:15%;">
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?>
                            <span class="t-live"><?= $value->match_live; ?></span>
                        </td>
                        <td class="tx-c"><img style="width:20px;position:relative;top:-5px;" src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>"></td>
                        <td class="tx-l" style="width: 30%;">
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <?= $value->team_b; ?>
                            <!-- </a> -->
                        </td>
                    </tr>
                    <?php
                }
            }
        ?>
        </tbody>
    </table>
    <table class="table border-b" id="jadwal-lusa" style="display: none;">
        <tbody>
        <?php
            if ($match_lusa) {
                $match_lusa = json_decode($match_lusa);
                foreach ($match_lusa->data as $value) {
                    ?>
                    <tr>
                        <td class="tx-r" style="width:30%;"><?= $value->team_a; ?>
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <!-- </a> -->
                        </td>
                        <td class="tx-c"><img style="width:20px;position:relative;top:-5px;" src="<?= $value->url_logo_a; ?>/small" alt="<?= $value->team_a; ?>"></td>
                        <td class="tx-c" style="width:15%;">
                            <?= $value->event; ?>
                            <br>
                            <?= $value->match_schedule; ?>
                            <span class="t-live"><?= $value->match_live; ?></span>
                        </td>
                        <td class="tx-c"><img style="width:20px;position:relative;top:-5px;" src="<?= $value->url_logo_b; ?>/small" alt="<?= $value->team_b; ?>"></td>
                        <td class="tx-l" style="width:30%;">
                            <!-- <a href="<?= $value->url_team_a; ?>"> -->
                            <?= $value->team_b; ?>
                            <!-- </a> -->
                        </td>
                    </tr>
                    <?php
                }
            }
        ?>
        </tbody>
    </table>
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

    $('#pilih-liga').change(function(event) {
        var liganya     = $(this).val();
        window.location.replace("<?= base_url(); ?>eyevent/jadwal-pertandingan/"+liganya);
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
    //         var page = "jadwal";
            
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
