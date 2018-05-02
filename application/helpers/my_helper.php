<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// if ( ! function_exists('test_method'))
// {
//     function word_limiter($str, $limit, $end_char)
//     {
    
//     	if(trim($str) == ''){
//     		return $str;
//     	}


//     	preg_match('/^\s*+(?:\S++\s*+){1,'.(int) $limit.'}/', $str, $matches);

//     	if(strlen($str) == strlen($matches[0])){
//     		$end_char = '';
//     	}
//     	return rtrim($matches[0]).$end_char;
//     }  
// }

if( ! function_exists('relative_time'))
{
    function relative_time($datetime)
    {
        $CI =& get_instance();
        $CI->lang->load('date');

        if(!is_numeric($datetime))
        {
            $val = explode(" ",$datetime);
           $date = explode("-",$val[0]);
           $time = explode(":",$val[1]);
           $datetime = mktime($time[0],$time[1],$time[2],$date[1],$date[2],$date[0]);
        }

        $difference = time() - $datetime;
        $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
        $lengths = array("60","60","24","7","4.35","12","10");

        if ($difference > 0) 
        { 
            $ending = $CI->lang->line('date_ago');
        } 
        else 
        { 
            $difference = -$difference;
            $ending = $CI->lang->line('date_to_go');
        }
        for($j = 0; $difference >= $lengths[$j]; $j++)
        {
            $difference /= $lengths[$j];
        } 
        $difference = round($difference);

        if($difference != 1) 
        { 
            $period = strtolower($CI->lang->line('date_'.$periods[$j].'s'));
        } else {
            $period = strtolower($CI->lang->line('date_'.$periods[$j]));
        }
		
		if($period == 'second' || $period == 'seconds')
		{
			$period = 'detik';
		}else if($period == 'minute' || $period == 'minutes')
		{
			$period = 'menit';
		}else if($period == 'hour' || $period == 'hours')
		{
			$period = 'jam';
		}else if ($period == 'day' || $period == 'days')
		{
			$period = 'hari';
		}else if($period == 'week' || $period == 'weeks')
		{
			$period = 'minggu';
		}else if($period == 'year' || $period == 'years')
		{
			$period = 'tahun';
		}else if($period == 'month' || $period == 'months')
		{
			$period = 'bulan';
		}else
		{
			$period = 'dekade';
		}

        return "$difference $period $ending";
    }
}
//sw:begin
/* DEFINE LINK */
define('CSSPATH',base_url().'assets/eyeme/css/');
define('JSPATH',base_url().'assets/eyeme/js/');
define('sIMGPATH',base_url().'assets/img/eyeme/');
define('MEURL',base_url().'eyeme/');
define('MEIMG',base_url().'upload/eyeme/');
define('MEMENU',base_url().'assets/img/eyeme/menu/');
define('MEHOME',base_url().'eyeme');
define('MEEXPLORE',base_url().'eyeme/explore');
define('MEUPLOAD',base_url().'eyeme/upload');
define('MEPROFILE',base_url().'eyeme/profile/');
define('MEIMGUSR',base_url().'eyeme/img/');
define('MENOTIF',base_url().'eyeme/notif');
define('IMGPATH','./upload/eyeme/');
define('EYEMEPATH',base_url().'eyeme/');

define('DPIC',sIMGPATH.'user-discover.png');
define('NOW',date('Y-m-d G:i:s'));
define('LOGIN',base_url().'home/login');
define('IMGSTORE',base_url().'assets/img_storage/');
define('MEMBERAREA',base_url().'home/member_area');
define('EYEPROFILE',base_url().'eyeprofile/');
define('pCLUB',EYEPROFILE.'klub');
define('pPLAYER',EYEPROFILE.'pemain');
define('pOFFICIAL',EYEPROFILE.'official');
define('pREFEREE',EYEPROFILE.'referee');
define('pSUPPORT',EYEPROFILE.'supporter');
define('EYETUBE',base_url().'eyetube');
define('EYENEWS',base_url().'eyenews');
define('EYEME',base_url().'eyeme');
define('EYEEVENT',base_url().'eyevent');
define('EYEMARKET',base_url().'eyemarket');
define('EYETRANSFER',base_url().'eyetransfer');
define('EYETIKET',base_url().'eyetiket');
define('EYEWALLET',base_url().'wallet');
define('sIMGSTORE','http://eyesoccer.id/systems/eyenews_storage/');
define('mMEMBERAREA',base_url().'member/home');
define('FORGOTPASS',base_url().'member/forgot');
define('DEFAULTIMG',base_url().'assets/home/img/eyeme-photo%20thumbnail.png');
define('NEWSDETAIL',base_url().'eyenews/detail/');
define('MARKETIMG','http://static.eyesoccer.id/v1/cache/images/');
define('MARKETFOLDER','https://eyesoccer.id/public_html/upload/eyemarket');
define('LOGINURL',base_url().'member');



function p($arr){
    echo '<pre>';
     print_r($arr);
    echo '</pre>';

}
function loginBtn($hasLogin){
    
    if(is_array($hasLogin)){
        return '<img src="'.$hasLogin['url_pic'].'/small" style="width:30px;height:30px;">
                <a class="m-reg" href="'.LOGINURL.'"><span>Hai '.$hasLogin['username'].'</span></a>';
    } else {
        return '<a class="m-reg" href="'.LOGINURL.'"><i class="material-icons">input</i>Login</a>';
    }
}
function imgCache($imgName,$size="medium"){
    return 'http://static.eyesoccer.id/v1/cache/images/'.$imgName.'/'.$size;
}

function cryptPass($str){
    return md5($str);
}

function sql_injection($value){
    
        //$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($value,ENT_QUOTES))));
        //return $filter_sql;
    
    $magic_quotes_active = get_magic_quotes_gpc();
        $new_enough_php = function_exists("mysql_real_escape_string(unescaped_string)"); //i.e. PHP >= v4.3.0
    
    if($new_enough_php) { //PHP v4.3.0 or higher
        //undo any magic quote effect so mysql_real_escape_string can do the work
        
        if($magic_quotes_active) {$value = stripslashes($value);}
        
        $value = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($value,ENT_QUOTES))));
        
    } else { //before PHP v4.3.0
        
        if(!$magic_quotes_active) {
        $value = addslashes($value);
        }
    }
    return $value;
}

function inputSecure($str){
    $t = preg_replace('/<[^<|>]+?>/', '', htmlspecialchars_decode($str));
    $t = htmlentities($t, ENT_QUOTES, "UTF-8");
    
    return sql_injection($t);
}

/**
 *
 *Config Email
 *
 */

function config_email($host, $port, $user, $pass)
{
    $CI =& get_instance();
    
    $config['mailpath'] 	= '/usr/bin/sendmail';
    $config['protocol'] 	= 'smtp';
    $config['smtp_host'] 	= $host; //Yahoo | ssl://smtp.mail.yahoo.com, Gmail | ssl://smtp.gmail.com
    $config['smtp_port'] 	= $port; //Port 25 | Yahoo/Gmail 465/587
    $config['smtp_user'] 	= $user;
    $config['smtp_pass'] 	= $pass;
    $config['smtp_timeout'] = 5;
    $config['priority'] 	= 3; //Email Priority. 1 = highest. 5 = lowest. 3 = normal.
    $config['mailtype'] 	= 'html'; //text or html
    $config['charset'] 	= 'iso-8859-1'; //utf-8 or iso-8859-1
    $config['newline']  	= "\r\n";
    $config['crlf'] 	= "\r\n";
    $config['wordwrap'] 	= TRUE;
    $CI->email->initialize($config);
}

function send_email($opt = array(), $set = '')
{
    $CI =& get_instance();
    
    config_email('ssl://smtp.gmail.com', '587', 'eyesoccerindonesia@gmail.com', 'BolaSepak777#');
    
    $CI->email->from('info@eyesoccer.id', 'Info Eyesoccer');
    if(isset($opt['reply_to']))
    {
	$CI->email->reply_to($opt['from'], $opt['name']);
    }
    $CI->email->to($opt['to']);
    $CI->email->bcc('ebenk.rzq@gmail.com');
    $CI->email->subject('Eyesoccer | '.$opt['subject']);
    $CI->email->message($opt['message']);
    
    if(!$CI->email->send())
    {
	$CI->email->print_debugger(array('headers'));
    } else {
	echo 'Email berhasil terkirim';
    }
}

/**
    *fungsi getDistance::
    *untuk menentukan jarak dari 2 waktu
    *@param $time1
    *@param $time2
    *@return $distance timestamp

*/
function getDistance($time1,$time2){
    $distance =  strtotime($time1) - strtotime($time2);
    return $distance;

}

/**
    *fungsi getTime:: untuk mengambil detail waktu 
    *gunakan getDistance untuk menentukan jarak waktu 
    *@param $timeStamp
    *@return string;


*/
function getTime($timeStamp){
    $timeString = ""; 
    $day       = floor($timeStamp / (3600 * 24));
    $week      = floor($day/7);
    $month     = ($week > 4 ? floor($day/30) : 0 );
    $years     = ($month > 12 ? floor($day / 365) : 0);
    $hours     = floor(($timeStamp % (3600 * 24)) / 3600 );
    $minute    = (floor($timeStamp) / 60) % 60;
    $secon     = (floor($timeStamp % 60) > 1 ? floor($timeStamp % 60) : 1);

    if($years > 0 ){
        $timeString .= $years.'Tahun yang lalu';
    }
    elseif($month > 0 AND $years == 0 ){
        $timeString .= $month.'Bulan yang lalu';
    }
    elseif($week > 0 AND $month== 0 AND $years == 0 ){
         $timeString  .= $week.' Pekan yang lalu';
    }
    elseif($day  > 0 AND $week == 0 AND $month== 0 AND $years == 0 ){
        $timeString  .= $day.' Hari yang lalu';
    }
    elseif($hours > 0 AND $day <= 0 ){
        $timeString .= $hours.' Jam Yang lalu';
    }
    elseif($minute > 0 AND $hours <= 0 AND $day <= 0 ){
        $timeString  .= $minute.' Menit yang lalu';
    }
   else{
        $timeString = $secon.' Detik Yang lalu';
    }
    return array('day' => $day,'hours'=> $hours,'minute'=> $minute,'secon'=>$secon,'timeString' => $timeString);
}

/**
    *fungsi btnFol::
    *untuk memamnggil button follow
    *@param $id_member = id member yang sedang aktif
    *@param $has_follow = default (bool) TRUE check sudah di follow
    *@param $attr       = default (array) tambahan attribut bila diperlukan
    *@param $class      = default btn-white-follow class css
    *@param $checkSelf  = periksa akun sendiri yang atau bukan if TRUE return '': else return button
    *@return string button  

*/
function btnFol($id_member,$has_follow = TRUE,$attr=array(),$class='btn-white-follow',$checkSelf = FALSE){

    $addAttr = '';
    if(is_array($attr)){
        foreach($attr as $k => $v){
        $addAttr .= "{$k}=\"{$v}\"";

        }
    }

    if($checkSelf == TRUE){
        return '';
    }
    else{
        return '<button class="'.$class.' '.(!$has_follow ? 'fol' : 'unfol').'" type="button" rel="'.$id_member.'" '.$addAttr.'>'
        .(!$has_follow ? 'ikuti':'Mengikuti').'</button>';
    }
}

//button login 
function btnLogin($login){
    return '<span class="btn-reg">
            Pendaftaran Liga</span>
            <span class="btn-btn-login">

            <a style="text-decoration: none;" href="'.(!$login ? LOGIN : MEMBERAREA).'">
            '.(!$login ? 'masuk': '<img src="'.IMGSTORE.load_top_avatar().'" class="img img-circle" width="30px" height="30px" style="border-radius: 20px;float: right;margin-left: 15px;" alt="Photo profile">'.load_top_name()).'
            </a>
            </span>';
}

function discard_img($id_img){
    return '<div class="posisi-kotak-popup p-a v-'.$id_img.'" style="display:none;">
                <div class="kotak-popup">
                    <div class="panah-popup p-r m-0">
                    </div>
                    <span class="teks-popup p-r">Laporkan</span>
                    <span class="teks-popup p-r">Bagikan</span>
                </div>
            </div>';
}

if ( ! function_exists('image_resize'))
{
    function image_resize($width, $height, $crop=0, $src, $dst='')
    {
        if(!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";
        
        if($w < $width || $h < $height)
        {
            if($w < $h){
                $width = $height = $w;
            }else{
                $width = $height = $h;
            }
        }
              
        $dirName = 'thumb'; 
        $exp        = explode('/',$src);
        $img        = $exp[count($exp)-1]; // image name
        
        array_splice($exp,-1);
        $cropPath   = implode('/',$exp).'/'.$dirName; // folder path for crop
        $cropDst    =$cropPath.'/'.$img;
        
        $dst = $dst == '' ? $cropDst : $dst;
        
        #check dir exist for thumb
        $dirExist = is_dir($cropPath);
        if(!$dirExist){mkdir($cropPath);}       
    
        $type = strtolower(substr(strrchr($src,"."),1));
        if($type == 'jpeg') $type = 'jpg';
        switch($type){
            case 'bmp': $img = imagecreatefromwbmp($src); break;
            case 'gif': $img = imagecreatefromgif($src); break;
            case 'jpg': $img = imagecreatefromjpeg($src); break;
            case 'png': $img = imagecreatefrompng($src); break;
            default : return "Unsupported picture type!";
        }
        
        // resize
        if($crop){
            if($w < $width or $h < $height) return "Picture is too small!";
            $ratio = max($width/$w, $height/$h);
            $h = $height / $ratio;
            $x = ($w - $width / $ratio) / 2;
            $w = $width / $ratio;
        }else{
            if($w < $width and $h < $height) return "Picture is too small!";
            $ratio = min($width/$w, $height/$h);
            $width = $w * $ratio;
            $height = $h * $ratio;
            $x = 0;
        }
        
        $new = imagecreatetruecolor($width, $height);
        
        // preserve transparency
        if($type == "gif" or $type == "png"){
            imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
            imagealphablending($new, false);
            imagesavealpha($new, true);
        }
        
        imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);
        
        switch($type){
            case 'bmp': imagewbmp($new, $dst); break;
            case 'gif': imagegif($new, $dst); break;
            case 'jpg': imagejpeg($new, $dst); break;
            case 'png': imagepng($new, $dst); break;
        }
        
        #echo '<br><b>'.$type.'</b><br>';
        return true;
    }
}

/**
 * Generates meta tags from an array of key/values
 *
 * @access  public
 * @param   array
 * @return  string
 */
function meta_property($property = '', $content = '', $type = 'property', $newline = "\n")
{
    // Since we allow the data to be passes as a string, a simple array
    // or a multidimensional one, we need to do a little prepping.
    if ( ! is_array($property))
    {
        $property = array(array('property' => $property, 'content' => $content, 'type' => $type, 'newline' => $newline));
    }
    else
    {
        // Turn single array into multidimensional
        if (isset($property['property']))
        {
            $property = array($property);
        }
    }

    $str = '';
    foreach ($property as $meta)
    {
        $type       = ( ! isset($meta['type']) OR $meta['type'] == 'property') ? 'property' : $meta['type'];
        $property       = ( ! isset($meta['property']))     ? ''    : $meta['property'];
        $content    = ( ! isset($meta['content']))  ? ''    : $meta['content'];
        $newline    = ( ! isset($meta['newline']))  ? "\n"  : $meta['newline'];

        $str .= '<meta '.$type.'="'.$property.'" content="'.$content.'" />'.$newline;
    }

    return $str;
}
//sw:end
function getOngkir($tujuan,$berat)
{
    $berat_kg   = $berat / 1000;
    $exp        = explode(".", $berat_kg);

    $berat_fix  = "";
    if ($berat <= 1300)
    {
        $berat_fix  = 1;
    }
    else
    {
        if ($exp[1] <= 3)
        {
            $berat_fix  = $exp[0];
        }
        else
        {
            $berat_fix  = $exp[0] + 1;
        }
    }
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://apiv2.jne.co.id:10101/tracing/api/pricedev",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "username=MATABOLA&api_key=4703a7e30643c286460874b14feab0d9&from=CGK10000&thru=$tujuan&weight=$berat_fix",
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "accept: application/json"
        ),
    ));

    $response   = curl_exec($curl);
    $err        = curl_error($curl);

    curl_close($curl);

    if ($err) {
      return "cURL Error #:" . $err;
    } else {
      // echo $response;
      return json_decode($response);
    }
}

function imgUrl()
{
    return "https://www.eyesoccer.id/";
}

function load_top_avatar()
{
	$CI =& get_instance();
	$prof_pic=$CI->db->query("SELECT b.pic FROM tbl_member a left join tbl_gallery b ON b.id_gallery=a.profile_pic WHERE id_member='".$_SESSION["id_member"]."'")->row()->pic;
	
	return $prof_pic;
}

function load_top_name()
{
	$CI =& get_instance();
	$prof_name=$CI->db->query("SELECT a.name FROM tbl_member a left join tbl_gallery b ON b.id_gallery=a.profile_pic WHERE id_member='".$_SESSION["id_member"]."'")->row()->name;
	
	return $prof_name;
}

function pathUrl()
{
	if($_SERVER['SERVER_NAME'] == 'localhost')
    return "./";
	else
	return "/home/admin/web/".$_SERVER['SERVER_NAME']."/public_html/";
}

function LinkScrapingLigaIndonesia()
{
	// return "http://www.klasemenliga.com/?page=competition&id=629";
	// return "http://www.klasemenliga.com/?page=season&id=15105";
	return "https://id.soccerway.com/national/indonesia/super-liga/2018/regular-season/r45094/";
}

function LinkScrapingLigaInggris()
{
	// return "http://www.klasemenliga.com/?page=competition&id=8";
	return "https://id.soccerway.com/national/england/premier-league/20172018/regular-season/r41547/";
}

function LinkScrapingTopLigaInggris()
{
    return "http://www.klasemenliga.com/?page=competition&id=8";
}

function LinkScrapingLigaItalia()
{
    // return "http://www.klasemenliga.com/?page=competition&id=13";
    return "https://id.soccerway.com/national/italy/serie-a/20172018/regular-season/r42011/";
}

function LinkScrapingTopLigaItalia()
{
	return "http://www.klasemenliga.com/?page=competition&id=13";
}

function LinkScrapingLigaSpanyol()
{
    // return file_get_contents("http://www.klasemenliga.com/?page=competition&id=7");
    // return "http://www.klasemenliga.com/?page=competition&id=7";
    return "https://id.soccerway.com/national/spain/primera-division/20172018/regular-season/r41509/";
}

function LinkScrapingTopLigaSpanyol()
{
	return "http://www.klasemenliga.com/?page=competition&id=7";
}

function get_date($rentang = "")
{
    $tanggal    = new DateTime(date("Y-m-d"));;

    $modif      = $tanggal->modify($rentang.' day');

    $tanggalnya = $modif->format('Y-m-d');

    return array('tanggalnya'    => $tanggalnya,);
}

function getManager($club_id = "")
{
    $CI =& get_instance();
	$manager=$CI->db->query("SELECT name FROM tbl_official_team WHERE club_now='".$club_id."'");
	if($manager->num_rows()>0){
		$manager = $manager->row()->name;
	}else{
		$manager = null;
	}
	
	return $manager;
}

function getTotalClub($liga)
{
	$compt = "and competition='".urldecode($liga)."'";
	$limit = '';
	if(urldecode($liga) == 'Liga Indonesia 2'){
		$limit = 'limit 24';
	}else if(urldecode($liga) == 'Liga Indonesia 1'){
		$limit = 'limit 18';
	}else if(urldecode($liga) == 'non liga'){
		$compt = "and competition in('SSB / Akademi Sepakbola')";
	}
    $CI =& get_instance();
	$query=$CI->db->query("SELECT name FROM tbl_club WHERE club_id is not null $compt $limit")->result_array();
	
	return count($query);
}

function send_mail($to,$subject,$msg)
{
    $url = 'http://ebenk.xyz/kirim_email.php';

    // what post fields?
    $fields = array(
       'to' => $to,
       'bcc' => "ebenk.rzq@gmail.com",
       'subject' => $subject,
       'msg' => $msg,
    );

    // build the urlencoded data
    $postvars = http_build_query($fields);

    // open connection
    $ch = curl_init();

    // set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);

    // execute post
    $result = curl_exec($ch);

    // close connection
    curl_close($ch);

    return $result;
}
function urltobetame($url){
  
    return str_replace('http://static.eyesoccer.id/v1/cache/images','http://beta.eyesoccer.id/upload/eyeme',$url);
    

}
function urltoimgstore($url){
    return str_replace('http://static.eyesoccer.id/v1/cache/images','http://beta.eyesoccer.id/assets/img_storage',$url);
}

function set_breadcrumb($kanal,$page)
{
	if (is_array($page)) {
        $html = " <div class='container' style='margin-top: 50px;'>
        <div class='crumb' style='margin: unset;'>
					<ul>
					<li><a href='" . base_url() . "' style='display: unset'>Home</a></li>
					<li><a href='" . base_url() . "" . $kanal . "' style='display: unset'>" . $kanal . "</a></li>";
        $numItems = count($page);
        $i = 0;
        foreach ($page as $value) {
            if (++$i === $numItems) {
				if(!empty($value)){
					$html .= "<li style='cursor:default;'>" . $value . "</li>";
				}
            } else {
                $html .= "<li><a href='" . base_url() . "" . $kanal . "/kategori/" . $value . "' style='display: unset'>" . $value . "</a></li>";
            }
        }
        $html .= "</ul></div></div>";
    } else {
		if ($page != "")
		{
			$html   = " <div class='crumb'>
							<ul>
							<li><a href='".base_url()."' style='display: unset'>Home</a></li>
							<li><a href='".base_url()."".$kanal."' style='display: unset'>".$kanal."</a></li>
							<li style='cursor:default;'>".$page."</li>
							</ul>
						</div>";
		}
		else
		{
			$html   = " <div class='crumb'>
							<ul>
							<li><a href='".base_url()."' style='display: unset'>Home</a></li>
							<li><a href='".base_url()."".$kanal."' style='display: unset'>".$kanal."</a></li>
							</ul>
						</div>";
		}
    }
    
    return $html;
}

function imgEyesoccer(){
	return 'http://static.eyesoccer.id/v1/cache/images/1519793206557_logo_login.png/small';
}

function loginAvaTop($hasLogin){
    
    if(is_array($hasLogin)){
        return '<i id="src" class="material-icons f-r">search</i>
				<a href="'.LOGINURL.'" style="color: #8ec429;">
					<div class="pprofile">
						<img src="'.$hasLogin['url_pic'].'/small" alt="avatar">
					</div>
				</a>';
    } else {
        return '<i id="src" class="material-icons f-r">search</i>
				<a href="member" style="color: #8ec429;">
					<div class="pprofile">
						<img src="'.SUBCDN.'assets/img/eyeme/user-discover.png" alt="">
					</div>
				</a>';
    }
}