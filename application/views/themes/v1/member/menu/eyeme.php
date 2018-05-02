	<?php
        $data['active'] = 'eyeme';
        $this->load->view($folder.'member/header', $data);
	?>
    <div class="container wlc">
        <div class="bg-eyeme">
            <img src="<?php echo base_url();?>assets/themes/v1/img/a.jpg" alt="Background Image">
            <div class="close-wlcm">
                <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="pp-eyeme">
                <div class="close-wlcm pp">
                    <i class="fas fa-pencil-alt"></i>
                </div>
                <div class="pp-eyeme-img">
                    <img src="<?php echo base_url();?>assets/themes/v1/img/d.jpg" alt="Profil Picture">
                </div>
            </div>    
        </div>       
    </div>
    <div class="container">
        <div class="form-profil-dash" id="form-player">
            <span>Nama</span>
            <input type="text" placeholder="data player">
            <span>Username</span>
            <input type="text" placeholder="data player">
            <span>Status</span>
            <input type="text" placeholder="data player">
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