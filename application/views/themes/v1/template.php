<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $folder = $this->config->item('themes'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P7HQLCC');</script>
	<!-- End Google Tag Manager -->
    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Copyright" content="Eyesoccer Indonesia">
    <meta http-equiv="imagetoolbar" content="no">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php // echo $meta_desc; ?>">
    <meta name="keywords" content="<?php // echo $meta_keyword; ?>">
    <meta name="author" content="Eyesoccer Indonesia">
    <meta name="language" content="Indonesia">
    <meta name="revisit-after" content="7">
    <meta name="webcrawlers" content="all">
    <meta name="rating" content="general">
    <meta name="spiders" content="all"> -->

    <title><?php echo $title; ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Begin of SEO Meta Tags -->
	<meta name="title" content="Berita Sepak Bola Indonesia Terbaru | Jadwal Bola | Database Pemain Bola | Eyesoccer" />
	<meta name="description" content="Portal Berita sepak bola indonesia terbaru, jadwal bola, database pemain bola, transfer pemain bola, klub bola, pelatih, manager, ofisial bola, supporter bola dan event sepak bola terlengkap di Indonesia" />
	<meta name="news_keywords" content="jadwal bola, berita bola, sepak bola, jadwal siaran bola, jadwal sepak bola, berita bola terkini, berita bola terbaru, berita sepak bola, info bola, berita bola hari ini, bola hari ini">
	<meta name="googlebot-news" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="robots" content="index,follow, noodp, noydir" />
	<meta name="author" content="EyeSoccer.id" />
	<meta name="language" content="id" />
	<meta name="geo.country" content="id" name="geo.country" />
	<meta http-equiv="content-language" content="In-Id" />
	<meta name="geo.placename"content="Indonesia" />
	<link rel="publisher" href="https://plus.google.com/u/1/105520415591265268244" />
	<meta name="google-site-verification" content="Ypg1XCrvdn4IyWbgoGHkEWqmK5c8tz6wnBQvOObVRJE" />
	<!-- End of SEO Meta Tags-->
	
	<!-- Begin of Facebook Open graph data-->
	<meta property="fb:app_id" content="140611863350583" />
	<meta property="og:site_name" content="EyeSoccer" />
	<meta property="og:url" content="https://www.eyesoccer.id" />
	<meta property="og:type" content="Website" />
	<meta property="og:title" content="Berita Sepak Bola Indonesia Terbaru | Jadwal Bola | Database Pemain Bola | Eyesoccer" />
	<meta property="og:description" content="Portal Berita sepak bola indonesia terbaru, jadwal bola, database pemain bola, transfer pemain bola, klub bola, pelatih, manager, ofisial bola, supporter bola dan event sepak bola terlengkap di Indonesia" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:image" content="<?php echo SUBCDN."assets/$folder/img/fav.png" ?>" />
	<!--End of Facebook open graph data-->
	   
	<!--begin of twitter card data-->
	<meta name="twitter:card" content="summary" />    
	<meta name="twitter:site" content="@eyesoccer_id" />
	<meta name="twitter:creator" content="@eyesoccer_id" />
	<meta name="twitter:domain" content="EyeSoccer"/>
	<meta name="twitter:title" content="Berita Sepak Bola Indonesia Terbaru | Jadwal Bola | Database Pemain Bola | Eyesoccer" />
	<meta name="twitter:description" content="Portal Berita sepak bola indonesia terbaru, jadwal bola, database pemain bola, transfer pemain bola, klub bola, pelatih, manager, ofisial bola, supporter bola dan event sepak bola terlengkap di Indonesia" />
	<meta name="twitter:image" content="<?php echo SUBCDN."assets/$folder/img/fav.png" ?>" />
	<!--end of twitter card data-->
	
	<link rel="canonical" href="https://www.eyesoccer.id<?php echo $_SERVER['REQUEST_URI'];?>" />
    <link rel="shortcut icon" href="<?php echo SUBCDN."assets/$folder/img/fav.png" ?>" />
    
    <!-- Default -->

    <?php if ($kanal == "eyemarket")
        {
    ?>
            <link href="<?php echo SUBCDN."assets/css/bootstrap/css/eyemarket/bootstrap3.min.css" ?>" rel="stylesheet" type="text/css">
            <link href="<?php echo SUBCDN."assets/css/bootstrap/css/eyemarket/animate.css" ?>" rel="stylesheet" type="text/css">
            <link href="<?php echo SUBCDN."assets/css/bootstrap/css/eyemarket/style.default.css" ?>" rel="stylesheet" type="text/css">
    <?php    
        }
    ?>


    <!--<link href="<?php //echo SUBCDN."assets/css/bootstrap/css/bootstrap.min.css" ?>" rel="stylesheet" type="text/css">-->
    <link href="<?php echo SUBCDN."assets/css/font-awesome/css/fontawesome-all.css" ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo SUBCDN."assets/$folder/css/bs.css" ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo SUBCDN."assets/$folder/css/dev.css" ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo SUBCDN."assets/$folder/css/style.css" ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo SUBCDN."assets/$folder/css/dashboard.css" ?>" rel="stylesheet" type="text/css" />
    
    <!-- JQuery UI -->
    <!--<script src='<?php /*echo SUBCDN.'assets/js/jquery-2.0.2.min.js'; */?>'></script>
    <script src='<?php /*echo SUBCDN.'assets/css/bootstrap/js/bootstrap.min.js'; */?>'></script>-->

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

    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	<script>
	  var OneSignal = window.OneSignal || [];
	  OneSignal.push(function() {
		OneSignal.init({
		  appId: "41dbf805-a574-43cf-97e0-5da12c11fa95",
		});
	  });
	</script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7HQLCC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <?php
        $data['folder'] = $folder;
        $this->load->view($folder.'widget/navigator', $data);
        if (isset($kanal) && $kanal == 'eyevent')
        {
            echo set_breadcrumb("eyevent","");
            $this->load->view($folder.'widget/navbar_event', $data);
        }
        $this->load->view($folder.$content, $data);
        //eyeme menu 
        (@$me_menu == 1 ? $this->load->view($folder.'eyeme/me_menu',$data) : '');

        $this->load->view($folder.'widget/sidebar', $data);

        (@$me_menu == 0 ? $this->load->view($folder.'widget/footer',$data) : '');

    ?>
    
    <div class='baseurl' val='<?php echo base_url(); ?>'></div>
    
    <div class='box_popup'>
	<div class='loading'></div>
	<div class='show_popup'></div>
    </div>
    <div class='xh'></div>
    
    <script type="text/javascript">
	<?php //$cap = $google->gcaptcha; ?>
	/*var CaptchaCallback = function(){
	    $('.g-recaptcha').each(function(index, el) {
		grecaptcha.render(el, {'sitekey' : '<?php #echo $cap->site; ?>'});
	    });
	};*/
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <!--<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit"></script>-->
    
    <script src="<?php echo SUBCDN."assets/$folder/js/home.js"; ?>"></script>
    <script>
        //var orangeActive = document.getElementsByClassName("orange-active")[0];
        //var disableOrangeActive = document.getElementsByClassName("disable-orange-active")[0];
        //disableOrangeActive.onclick = function() {
        //    orangeActive.style.color = "unset !important";
        //    orangeActive.style.borderBottom = "unset !important";
        //    disableOrangeActive.style.color = "#FF5722";
        //    disableOrangeActive.style.border = "#FF5722";
        //}
        //orangeActive.onclick = function() {
        //    orangeActive.style.color = "unset";
        //    orangeActive.style.borderBottom = "unset";
        //}
        //window.onload = function(){
        //    orangeActive.style.color = "#FF5722";
        //    orangeActive.style.borderBottom = "4px solid #FF5722";
        //}
    </script>
    <script>
        (function(d, s, id)
        {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.10&appId=478665635841729";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="container static-banner-ads" style="background: unset;">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- EyesoccerMobile 1 #OverlayBottom320x50 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:50px"
     data-ad-client="ca-pub-7635854626605122"
     data-ad-slot="8858418799"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>

    <!-- Development by :-->
        <!-- Backend Division : -->
            <!-- Rizky Satrio Putro -->
            <!-- Muhammad Robi -->
                <!-- mail:muhammadrobi65@gmail.com -->
                <!-- LinkedIn:https://www.linkedin.com/in/muhammad-robi-662457139/ -->
                <!-- IG:@robimuh -->
            <!-- Kharizuno Hizbullah -->
            <!-- Sofyan Waldy -->
            <!-- Mhd. Arif Hidayat -->
        <!-- Frontend Division : -->
            <!-- Fajar Ulin Nuha -->
            <!-- Faradila Nurzahra Danopa -->
    <!-- ===================================================================================================== -->

</body>
</html>
