<div class="container" style="margin-top: 50px;" xhide="true">
    <div id="all" class="loadall">
    <div id="reqprofile" class='loadprofile' action="eyeme" loading="off" clean="clsprofile">
          <div id='clsprofile'>
                    <script>
                        $(document).ready(function(){
                            $(window).on('load',function(){
                                ajaxOnLoad('loadprofile');
                            });

                        });
                 
                    </script>
                </div>
            <input type="hidden" name="fn" value="meprofile" class="cinput">
            <input type="hidden" name="uname" value ="<?php echo $this->uri->segment(3)?>-profile" class="cinput">
           
        <div class="container">
            <div class="eme-prof-pict">
                <div class="gr" style="width: 200px;height: 200px">
                </div>
            </div>
            <div class="eme-prof-user">
                <a href=""></a>
            </div>
            <p class="eme-prof-desc"></p>
            <table class="tx-c tr-1-bold">
                <tr>
                    <td><span class="gr">xxxxx</span></td>
                    <td><span class="gr">xxxxx</span></td>
                    <td><span class="gr">xxxxx</span></td>
                </tr>
            </table>
        </div>
    </div>

    <div id="reqprofileimg" class='loadprofileimg' action="eyeme" loading="off" clean="clsprofileimg">
        <div id='clsprofile'>
            <script>
                $(document).ready(function(){
                    $(window).on('load',function(){
                        ajaxOnLoad('loadprofileimg');
                    });

                });
         
            </script>
        </div>
            <input type="hidden" name="fn" value="meprofile" class="cinput">
            <input type="hidden" name="uname" value ="<?php echo $this->uri->segment(3)?>-imglist" class="cinput">
            <div class="content-profile">
                <div class="content-profile-item gr">
                    <img src="" alt="">
                </div>
                <div class="content-profile-item gr">
                    <img src="" alt="">
                </div>
                <div class="content-profile-item gr">
                    <img src="" alt="">
                </div>
                <div class="content-profile-item gr">
                    <img src="" alt="">
                </div>
                <div class="content-profile-item gr">
                    <img src="" alt="">
                </div>
                <div class="content-profile-item gr">
                    <img src="" alt="">
                </div>
            </div>
    </div>
</div>
</div>

<div class="container flw">
    <div class="container bbg ftitle">
        <h5>Pengikut</h5>
        <!-- <h5>Diikuti</h5> -->
    </div>
    <div class="dftrflw">
        <div class="list-flw">
            <table>
                <tr>
                    <td>
                        <div class="profimg">
                            <a href=""><img src="<?php echo base_url()?>assets/img/eyeme/user-discover.png" alt="foto profil"></a>
                        </div>
                    </td>
                    <td>
                        <a href=""><span>username</span></a>
                    </td>
                    <td>
                        <a href=""><button class="btn-fol2">Mengikuti</button></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="profimg">
                            <a href=""><img src="<?php echo base_url()?>assets/img/eyeme/user-discover.png" alt="foto profil"></a>
                        </div>
                    </td>
                    <td>
                        <a href=""><span>username</span></a>
                    </td>
                    <td>
                        <button class="btn-fol">Ikuti</button>
                    </td>
                </tr>               
            </table>
        </div>
    </div>
</div>
<div class="container flw2">
    <div class="container bbg ftitle">
        <!-- <h5>Pengikut</h5> -->
        <h5>Diikuti</h5>
    </div>
    <div class="dftrflw">
        <div class="list-flw">
            <table>
                <tr>
                    <td>
                        <div class="profimg">
                            <a href=""><img src="<?php echo base_url()?>assets/img/eyeme/user-discover.png" alt="foto profil"></a>
                        </div>
                    </td>
                    <td>
                        <a href=""><span>username</span></a>
                    </td>
                    <td>
                        <a href=""><button class="btn-fol2">Mengikuti</button></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="profimg">
                            <a href=""><img src="<?php echo base_url()?>assets/img/eyeme/user-discover.png" alt="foto profil"></a>
                        </div>
                    </td>
                    <td>
                        <a href=""><span>username</span></a>
                    </td>
                    <td>
                        <button class="btn-fol">Ikuti</button>
                    </td>
                </tr>               
            </table>
        </div>
    </div>
</div>