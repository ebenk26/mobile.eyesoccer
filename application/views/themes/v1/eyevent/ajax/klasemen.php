<style>
		.tvchanel{
			color:#d19595;
			padding: 3px 0px;
			border-radius: 15px;
			background-color:#e6e6e652;
		}
		.listmatch:hover{
		background-color:#fdd79f38;
		}



		.zona_ucl{background-color: #00580c3b;}
		.zona_uefa{background-color: #333e963d;}
		.zona_degradasi{background-color: #ff000047;}
		.zona_aman{background-color: #ededed47;}
		.zona_ucl:hover{background-color: #00580c54;}
		.zona_uefa:hover{background-color: #333e9652;}
		.zona_degradasi:hover{background-color: #ff00008f;}
		.zona_aman:hover{background-color: #dcd9d947;}
		.zona_acl{background-color: #00580c3b;}
		.zona_afc{background-color: #333e963d;}
		.zona_afc_wl{background-color: #333e9624;}
		.zona_aman{background-color: #ededed47;}
		.zona_acl:hover{background-color: #00580c54;}
		.zona_afc:hover{background-color: #333e9652;}
		.zona_afc_wl:hover{background-color: #333e964f;}
		.zona_aman:hover{background-color: #dcd9d947;}

	.detailzona_kontinental1{
	    z-index:-1;
		font-size:12px;
		padding: 20px 20px 20px 20px;
		margin: 20px 20px 20px 20px;
		position:relative;
		top:17px;
		left:-40px;
	}
	.detailzona_kontinental2{
		font-size:12px;
		padding: 20px 20px 20px 20px;
		margin: 20px 20px 20px 20px;
		position:relative;
		top:-58px;
		left:115px;
	}
	.detailzona_degradasi{
		font-size:12px;
		padding: 20px 20px 20px 20px;
		margin: 20px 20px 20px 20px;
		position:relative;
        top: -100px;
        left: -40px;
	}
	.detailkontinental1{
		background-color:#c4d8c7;
		width: 20px;
		height:10px;
		padding: 5px 15px 0px 15px;
		margin: 10px 10px 10px 10px;
		border-radius:8px;
	}
	.detailkontinental2{
		background-color:#ced1e6;
		width: 20px;
		height:10px;
		padding: 5px 15px 0px 15px;
		margin: 10px 10px 10px 10px;
		border-radius:8px;
	}
	.detaildegradasi{
		background-color:#ffb8b8;
		width: 20px;
		height:10px;
		padding: 5px 15px 0px 15px;
		margin: 10px 10px 10px 10px;
		border-radius:8px;
	}
		</style>
<div class="border-box">
    <span class="jp-k">KLASEMEN</span>
    <select id="select_league" name="liganya" selected="true" class="slct-lg">
        <option value="indonesia">Liga 1 Indonesia</option>
        <option value="inggris">Liga Inggris</option>
        <option value="spanyol">Liga Spanyol</option>
        <option value="italia">Liga Italia</option>
    </select>
    <div class="border-box pd-l-0">
        <div id="liga_indonesia">
            <table class="border-box radius"  cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th title="Posisi">#</th>
                        <th title="Klub">Klub</th>
                        <th title="Bermain">B</th>
                        <th title="Menang">M</th>
                        <th title="Seri">S</th>
                        <th title="Kalah">K</th>
                        <th title="Selisih Goal">SG</th>
                        <th title="Points">Pts</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $html = file_get_contents(LinkScrapingLigaIndonesia());
                        $premiere_doc = new DOMDocument();
                        libxml_use_internal_errors(TRUE); //disable libxml errors
                        if(!empty($html)){ //if any html is actually returned
                            $premiere_doc->loadHTML($html);
                            libxml_clear_errors(); //remove errors for yucky html
                            $pokemon_xpath = new DOMXPath($premiere_doc);
                            //get all the h2's with an id
                            $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                            $pokemon_list = array();
                            $i = 1;
                            if($pokemon_row->length > 0){
                                foreach($pokemon_row as $row){
                                    if($i == 1){
                                        $trclass="<tr class='zona_acl'>";}
                                    elseif($i == 2){
                                        $trclass="<tr class='zona_afc'>";}
                                    elseif($i == 3){
                                        $trclass="<tr class='zona_afc_wl'>";}
                                    elseif($i == 16){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 17){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 18){
                                        $trclass="<tr class='zona_degradasi'>";}		
                                    else{
                                        $trclass="<tr class='zona_aman'>";}
                                    
                                    echo $trclass;
                                    if($i <= 18){
                                        $types = $pokemon_xpath->query('td', $row);
                                        $n = 0;
                                        foreach($types as $type){
                                            if($type->nodeValue != ""){
                                                if($n != 1){
                                                    if($n != 7){
                                                        if($n != 8){
                                                            if($n != 11){
                                                                if($n != 12){
                                                                    if($n != 13){
                                                                        $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                        echo $nodeValue;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                            $n++;
                                        }
                                        $i ++;
                                    }
                                    echo "</tr>";
                                }
                            }
                        } 
                    ?>
                </tbody>
            </table>
            <div class="detailklasemen">
										<div class="detailzona_kontinental1"> <span class="detailkontinental1"></span>
										AFC Champion
										</div>
										<div class="detailzona_kontinental2"> <span class="detailkontinental2"></span>
										AFC Cup
										</div>
										<div class="detailzona_degradasi"> <span class="detaildegradasi"></span>
										Zona Degradasi
										</div>
									</div>
        </div>

        <div id="liga_inggris">
            <table class="border-box radius"  cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th title="Posisi">#</th>
                        <th title="Klub">Klub</th>
                        <th title="Bermain">B</th>
                        <th title="Menang">M</th>
                        <th title="Seri">S</th>
                        <th title="Kalah">K</th>
                        <th title="Selisih Goal">SG</th>
                        <th title="Points">Pts</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $html = file_get_contents(LinkScrapingLigaInggris());
                        $premiere_doc = new DOMDocument();
                        libxml_use_internal_errors(TRUE); //disable libxml errors
                        if(!empty($html)){ //if any html is actually returned
                            $premiere_doc->loadHTML($html);
                            libxml_clear_errors(); //remove errors for yucky html
                            $pokemon_xpath = new DOMXPath($premiere_doc);
                            //get all the h2's with an id
                            $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                            $pokemon_list = array();
                            $i = 1;
                            if($pokemon_row->length > 0){
                                foreach($pokemon_row as $row){
                                    if($i == 1){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 2){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 3){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 4){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 5){
                                        $trclass="<tr class='zona_uefa'>";}
                                    elseif($i == 18){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 19){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 20){
                                        $trclass="<tr class='zona_degradasi'>";}		
                                    else{
                                        $trclass="<tr class='zona_aman'>";}
                                    
                                    echo $trclass;
                                    if($i <= 20){
                                        $types = $pokemon_xpath->query('td', $row);
                                        $n = 0;
                                        foreach($types as $type){
                                            if($type->nodeValue != ""){
                                                if($n != 1){
                                                    if($n != 7){
                                                        if($n != 8){
                                                            if($n != 11){
                                                                if($n != 12){
                                                                    if($n != 13){
                                                                        $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                        echo $nodeValue;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                            $n++;
                                        }
                                        $i ++;
                                    }
                                    echo "</tr>";
                                }
                            }
                        } 
                    ?>
                </tbody>
            </table>
                        <div class="detailklasemen">
                            <div class="detailzona_kontinental1"> <span class="detailkontinental1"></span>
                            UEFA Champions
                            </div>
                            <div class="detailzona_kontinental2"> <span class="detailkontinental2"></span>
                            Europa League
                            </div>
                            <div class="detailzona_degradasi"> <span class="detaildegradasi"></span>
                            Zona Degradasi
                            </div>
                        </div>
        </div>

        <div id="liga_italia">
            <table class="border-box radius"  cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th title="Posisi">#</th>
                        <th title="Klub">Klub</th>
                        <th title="Bermain">B</th>
                        <th title="Menang">M</th>
                        <th title="Seri">S</th>
                        <th title="Kalah">K</th>
                        <th title="Selisih Goal">SG</th>
                        <th title="Points">Pts</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $html = file_get_contents(LinkScrapingLigaItalia());
                        $premiere_doc = new DOMDocument();
                        libxml_use_internal_errors(TRUE); //disable libxml errors
                        if(!empty($html)){ //if any html is actually returned
                            $premiere_doc->loadHTML($html);
                            libxml_clear_errors(); //remove errors for yucky html
                            $pokemon_xpath = new DOMXPath($premiere_doc);
                            //get all the h2's with an id
                            $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                            $pokemon_list = array();
                            $i = 1;
                            if($pokemon_row->length > 0){
                                foreach($pokemon_row as $row){
                                    if($i == 1){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 2){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 3){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 4){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 5){
                                        $trclass="<tr class='zona_uefa'>";}
                                    elseif($i == 6){
                                        $trclass="<tr class='zona_uefa'>";}
                                    elseif($i == 18){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 19){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 20){
                                        $trclass="<tr class='zona_degradasi'>";}		
                                    else{
                                        $trclass="<tr class='zona_aman'>";}
                                    
                                    echo $trclass;
                                    if($i <= 20){
                                        $types = $pokemon_xpath->query('td', $row);
                                        $n = 0;
                                        foreach($types as $type){
                                            if($type->nodeValue != ""){
                                                if($n != 1){
                                                    if($n != 7){
                                                        if($n != 8){
                                                            if($n != 11){
                                                                if($n != 12){
                                                                    if($n != 13){
                                                                        $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                        echo $nodeValue;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                            $n++;
                                        }
                                        $i ++;
                                    }
                                    echo "</tr>";
                                }
                            }
                        } 
                    ?>
                </tbody>
            </table>
                        <div class="detailklasemen">
                            <div class="detailzona_kontinental1"> <span class="detailkontinental1"></span>
                            UEFA Champions
                            </div>
                            <div class="detailzona_kontinental2"> <span class="detailkontinental2"></span>
                            Europa League
                            </div>
                            <div class="detailzona_degradasi"> <span class="detaildegradasi"></span>
                            Zona Degradasi
                            </div>
                        </div>
        </div>

        <div id="liga_spanyol">
            <table class="border-box radius"  cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th title="Posisi">#</th>
                        <th title="Klub">Klub</th>
                        <th title="Bermain">B</th>
                        <th title="Menang">M</th>
                        <th title="Seri">S</th>
                        <th title="Kalah">K</th>
                        <th title="Selisih Goal">SG</th>
                        <th title="Points">Pts</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $html = file_get_contents(LinkScrapingLigaSpanyol());
                        $premiere_doc = new DOMDocument();
                        libxml_use_internal_errors(TRUE); //disable libxml errors
                        if(!empty($html)){ //if any html is actually returned
                            $premiere_doc->loadHTML($html);
                            libxml_clear_errors(); //remove errors for yucky html
                            $pokemon_xpath = new DOMXPath($premiere_doc);
                            //get all the h2's with an id
                            $pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
                            $pokemon_list = array();
                            $i = 1;
                            if($pokemon_row->length > 0){
                                foreach($pokemon_row as $row){
                                    if($i == 1){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 2){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 3){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 4){
                                        $trclass="<tr class='zona_ucl'>";}
                                    elseif($i == 5){
                                        $trclass="<tr class='zona_uefa'>";}
                                    elseif($i == 6){
                                        $trclass="<tr class='zona_uefa'>";}
                                    elseif($i == 18){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 19){
                                        $trclass="<tr class='zona_degradasi'>";}
                                    elseif($i == 20){
                                        $trclass="<tr class='zona_degradasi'>";}		
                                    else{
                                        $trclass="<tr class='zona_aman'>";}
                                    
                                    echo $trclass;
                                    if($i <= 20){
                                        $types = $pokemon_xpath->query('td', $row);
                                        $n = 0;
                                        foreach($types as $type){
                                            if($type->nodeValue != ""){
                                                if($n != 1){
                                                    if($n != 7){
                                                        if($n != 8){
                                                            if($n != 11){
                                                                if($n != 12){
                                                                    if($n != 13){
                                                                        $nodeValue = "<td>".$type->nodeValue.'</td>';
                                                                        echo $nodeValue;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                            $n++;
                                        }
                                        $i ++;
                                    }
                                    echo "</tr>";
                                }
                            }
                        } 
                    ?>
                </tbody>
            </table>
                        <div class="detailklasemen">
                            <div class="detailzona_kontinental1"> <span class="detailkontinental1"></span>
                            UEFA Champions
                            </div>
                            <div class="detailzona_kontinental2"> <span class="detailkontinental2"></span>
                            Europa League
                            </div>
                            <div class="detailzona_degradasi"> <span class="detaildegradasi"></span>
                            Zona Degradasi
                            </div>
                        </div>
        </div>



    </div>
    <!-- <div class="t-c-b w-165">
        <a href="<?= base_url(); ?>eyevent/klasemen">
            <button type="" class="btn-green">Lihat Selengkapnya</button>
        </a>
    </div> -->
</div>

<script>
    $(document).ready(function(){

        $("#liga_inggris,#liga_italia,#liga_spanyol").hide();

        $("#select_league").change(function()
        {
            if($("#select_league").val() == "indonesia")
            {
                $("#liga_inggris,#liga_italia,#liga_spanyol").hide();
                $("#liga_indonesia").show();
            }
            else if($("#select_league").val() == "inggris")
            {
                $("#liga_indonesia,#liga_italia,#liga_spanyol").hide();
                $("#liga_inggris").show();
            }
            else if($("#select_league").val() == "spanyol")
            {
                $("#liga_indonesia,#liga_inggris,#liga_italia").hide();
                $("#liga_spanyol").show();
            }
            else if($("#select_league").val() == "italia")
            {
                $("#liga_indonesia,#liga_inggris,#liga_spanyol").hide();
                $("#liga_italia").show();
            }
        });
    })
</script>