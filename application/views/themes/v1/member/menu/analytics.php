	<?php
        $data['active'] = 'analytics';
        $this->load->view($folder.'member/header', $data);
	?>
    <div class="menu-dashboard bg243">
        <div class="container tx-c graph">
            <div class="menu-analytic">
                <span class="active">revenue</span>
                <span>statistic</span>
                <span>Activity</span>
            </div>
        </div>
        <div class="container graph">
            <div class="tx-c graphic-anal">
                <div class="d-w-m">
                    <span class="active">1D</span>
                    <span>1W</span>
                    <span>1M</span>
                    <span>6M</span>
                </div>
                <div class="">
        
                </div>
            </div>
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