	<?php
        $data['active'] = 'eyetube';
        $this->load->view($folder.'member/header', $data);
	?>
    <div class="container">
        <div class="tube-eye">
            <a href="">
                <div class="tube-eye-img">
                    <img src="<?php echo base_url();?>assets/themes/v1/img/d.jpg" alt="">
                </div>
                <h4>Antara Egy MV dan Irfan Bachdim di Kantor Eyesoccer</h4>
                <span>11 jam lalu - 99987 kali dilihat</span>
            </a> 
        </div>
        <div class="tube-eye">
            <a href="">
                <div class="tube-eye-img">
                    <img src="<?php echo base_url();?>assets/themes/v1/img/a.jpg" alt="">
                </div>
                <h4>Antara Egy MV dan Irfan Bachdim di Kantor Eyesoccer</h4>
                <span>11 jam lalu - 99987 kali dilihat</span>
            </a> 
        </div>
        <div class="tube-eye">
            <a href="">
                <div class="tube-eye-img">
                    <img src="<?php echo base_url();?>assets/themes/v1/img/d.jpg" alt="">
                </div>
                <h4>Antara Egy MV dan Irfan Bachdim di Kantor Eyesoccer</h4>
                <span>11 jam lalu - 99987 kali dilihat</span>
            </a> 
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("menuDashboard");
            if (x.style.display == "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>