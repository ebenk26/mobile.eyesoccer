<?php
    // echo set_breadcrumb("eyeprofile",urldecode($slug));
?>
<div class="crumb">
	<ul>
		<li><a href="<?php echo base_url();?>" style="display:unset;">Home</a></li>
		<li><a href="<?php echo base_url();?>eyeprofile/klub" style="display:unset;">Eyeprofile</a></li>
		<li id="slug_official_detail"><?php echo urldecode($slug);?></li>
	</ul>
</div>
<div id="reqoffcdetail" class='loadoffcdetail' action="eyeprofile" loading="off" clean="clsoffcdetail">
    <div id='clsoffcdetail'>
        <script>
            $(document).ready(function(){
                $(window).on('load',function(){
                    ajaxOnLoad('loadoffcdetail');
                });
            });
        </script>
    </div>
    <input type='hidden' name='fn' value='detailofficial' class='cinput'>
    <input type='hidden' name='slug' value='<?php echo $slug;?>' class='cinput'>
    <div class="eprofile">
        <div class="head">
        <div class="img-radius" style="background-color: #f2f2f2;">
            <img src="" alt="">
        </div>
        <h2 class="h2-text-bottom"></h2>
        <div class="table-scroll">
        <table class="content-tab-eprofile" style="visibility: hidden;">
            <tr>
                <td>Tempat Lahir</td>
                <td>: Lorem Ipsum</td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>: Lorem Ipsum</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: Lorem Ipsum</td>
            </tr>
            <tr>
                <td>klub Sekarang</td>
                <td>: Lorem Ipsum</td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>: Lorem Ipsum</td>
            </tr>
            <tr>
                <td>Kontrak</td>
                <td>: Lorem Ipsum</td>
            </tr>
            <tr>
                <td>Lisensi</td>
                <td>: Lorem Ipsum</td>
            </tr>
        </table>
        </div>
        </div>
        <div class="container table-blue" style="visibility: hidden;">
            <h3 class="h3-orange">latar belakang</h3>
            <p style="color: gray;font-size: .8em;float: left;">lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
            <h3 class="h3-orange">formasi (4-3-2-1)</h3>
            <div class="border-box formasi">
                <img src="" alt="">
            </div>
            <h3 class="h3-orange">karir klub</h3>
            <div class="table-scroll-x">
            <table class="table-stripe">
                <tr>
                    <th>#</th>
                    <th>klub</th>
                    <th>bergabung</th>
                    <th>masa kontrak</th>
                    <th>durasi</th>
                    <th>posisi</th>
                    <th>main</th>
                    <th>m</th>
                    <th>s</th>
                    <th>k</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>persib bandung</td>
                    <td>2 sep 2017</td>
                    <td>-</td>
                    <td>57 hari</td>
                    <td>manager</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>persib bandung</td>
                    <td>2 sep 2017</td>
                    <td>-</td>
                    <td>57 hari</td>
                    <td>manager</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </table>
            </div>
            <h3 class="h3-orange">karir klub</h3>
            <div class="table-scroll-x">
            <table class="table-stripe">
                <tr>
                    <th>#</th>
                    <th>klub</th>
                    <th>bergabung</th>
                    <th>masa kontrak</th>
                    <th>durasi</th>
                    <th>posisi</th>
                    <th>main</th>
                    <th>m</th>
                    <th>s</th>
                    <th>k</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>persib bandung</td>
                    <td>2 sep 2017</td>
                    <td>-</td>
                    <td>57 hari</td>
                    <td>manager</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>persib bandung</td>
                    <td>2 sep 2017</td>
                    <td>-</td>
                    <td>57 hari</td>
                    <td>manager</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </table>
            </div>
            
        </div>
    </div>
</div>