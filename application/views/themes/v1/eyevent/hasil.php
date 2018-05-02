<div id="reqmatch" class='loadevent' action="eyevent" loading="off" clean="clsevent">
    <div id='clsevent'>
        <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadevent');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='match_schedule' class='cinput'>
    <input type='hidden' name='page' value='eyevent-result' class='cinput'>
    <div class="container fafa" style="margin-top: 50px;">
        <!-- <div id="popupKalender" class="modal fade" role="dialog">
            <div class="m-event-kalender">
                <div id="z"></div>
                <button class="btn-white-g" type="button" style="margin-left: 8.75%;" data-dismiss="modal">Lihat</button>
                <button class="btn-white-g btn-white-g-block" type="button" data-dismiss="modal">tutup</button>
            </div>
        </div> -->
        <div class="container fafa">
            <h2 class="thjadwalhasil gr">HASIL PERTANDINGAN</h2>
            <!-- <select id="pilih-liga" class="lc">
                <option>Semua Liga</option>
            </select> -->
            <button type="button" class="lihat-jadwal gr" data-toggle="modal" data-target="#popupKalender">Pilih Tanggal Jadwal Lainnya</button>
        </div>
    </div>
</div> 