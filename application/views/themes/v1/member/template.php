<!DOCTYPE html>
<?php $folder = $this->config->item('themes'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo SUBCDN."assets/$folder/img/fav.png" ?>" />

    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/dev.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/style.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/$folder/css/dashboard.css"; ?>">
    <link rel="stylesheet" href="<?php echo SUBCDN."assets/css/font-awesome/css/fontawesome-all.css"; ?>">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src='<?php echo SUBCDN."assets/$folder/js/main.js"; ?>'></script>

    <!-- Zoom -->
    <script src="<?php echo SUBCDN."assets/js/zoom/jquery.elevatezoom.js"; ?>"></script>

    <!-- Lazy -->
    <script src="<?php echo SUBCDN."assets/js/lazy/jquery.lazy.min.js"; ?>"></script>

    <!-- SWAlert -->
    <link href="<?php echo SUBCDN."assets/js/swalert/sweetalert.css" ?>" rel="stylesheet" />
    <script src="<?php echo SUBCDN."assets/js/swalert/sweetalert.min.js"; ?>"></script>
</head>
<body class="m-pd-t-100 body-responsive">
    <?php $this->load->view($folder.'member/widget/top'); ?>

    <div class="responsif-add-100px">
        <?php $this->load->view($folder.'member/widget/menu'); ?>
    </div>

    <div id="isiContent" style="filter:none;">
        <?php
            $data['folder'] = $folder;
            $this->load->view($folder.$content, $data);
        ?>
    </div>

    <div class='baseurl' val='<?php echo base_url(); ?>'></div>

    <div class='box_popup'>
        <div class='loading'></div>
        <div class='show_popup'></div>
    </div>
    <div class='xh'></div>

    <!-- INBOX NOTIFICATION -->
    <?php $this->load->view($folder.'member/widget/message'); ?>

    <!-- NOTIFICATION -->
    <?php $this->load->view($folder.'member/widget/notif'); ?>

    <script>
        function myFunction() {
            var x = document.getElementById("menuDashboard");
            if (x.style.display == "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
        function closeFunction() {
            var y = document.getElementById("welcome");
            if (y.style.display == "block") {
                y.style.display = "none";
            }
        }
        function functionNotifInbox() {
            var y = document.getElementById("notifInbox");
            var p = document.getElementById("isiContent");
            var q = document.getElementById("signNotifInbox");
            var a = document.getElementById("notifications");
            if (y.style.display == "none") {
                y.style.display = "block";
                q.style.display = "none";
                p.style.filter = "blur(20px)";
                a.style.display = "none";

            } else {
                y.style.display = "none";
                p.style.filter = "unset";
            }
        }
        function functionNotification() {
            var a = document.getElementById("notifications");
            var b = document.getElementById("isiContent");
            var c = document.getElementById("signNotification");
            var y = document.getElementById("notifInbox");
            if (a.style.display == "none") {
                a.style.display = "block";
                c.style.display = "none";
                b.style.filter = "blur(20px)";
                y.style.display = "none";
            } else {
                a.style.display = "none";
                b.style.filter = "unset";
            }
        }
    </script>
</body>
</html>