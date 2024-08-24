<?php 

ini_set('safe_mode', false);
ini_set('open_basedir', false);
    // Fetches the CSRF for login authentication
    function fetchCSRF(){
        $url = 'https://linkedin.com/uas/login';
        $html = file_get_contents($url);
        $precsrf = (int) strpos($html, '<input type="hidden" name="loginCsrfParam" value="');
        $postcsrf = (int) strpos($html, '" id="loginCsrfParam-login">');
        $length = $postcsrf - $precsrf - 50; // The -50 / + 50 is to correct for: <input type="hidden" name="login...
        $csrf = substr($html, $precsrf + 50, $length);
        if($csrf == false){
            return false;
        }
        return $csrf;
    }
	
	function fetch_value($str, $find_start = '', $find_end = '')
{
    if ($find_start == '')
    {
        return '';
    }
    $start = strpos($str, $find_start);
    if ($start === false)
    {
        return '';
    }
    $length = strlen($find_start);
    $substr = substr($str, $start + $length);
    if ($find_end == '')
    {
        return $substr;
    }
    $end = strpos($substr, $find_end);
    if ($end === false)
    {
        return $substr;
    }
    return substr($substr, 0, $end);
}

$linkedin_login_page = "https://www.linkedin.com/uas/login";
$linkedin_ref = "https://www.linkedin.com";

$username = 'fmadkar@yahoo.com';
$password = 'India@123';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $linkedin_login_page);
curl_setopt($ch, CURLOPT_REFERER, $linkedin_ref);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7)');
curl_setopt($ch, CURLOPT_AUTOREFERER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');


$login_content = curl_exec($ch);
//echo $login_content;
//print_r($login_content);


if(curl_error($ch)) {
  echo 'error:' . curl_error($ch);
}

$var = array(
            'isJsEnabled' => 'false',
            'source_app' => '',
            'clickedSuggestion' => 'false',
            'session_key' => trim($username),
            'session_password' => trim($password),
            'signin' => 'Sign In',
            'session_redirect' => '',
            'trk' => '',
            'fromEmail' => '');
        $var['loginCsrfParam'] = fetch_value($login_content, 'type="hidden" name="loginCsrfParam" value="', '"');
        $var['csrfToken'] = fetch_value($login_content, 'type="hidden" name="csrfToken" value="', '"');
        $var['sourceAlias'] = fetch_value($login_content, 'input type="hidden" name="sourceAlias" value="', '"');

        $post_array = array();
            foreach ($var as $key => $value)
            {
                $post_array[] = urlencode($key) . '=' . urlencode($value);
            }
        $post_string = implode('&', $post_array);

curl_setopt($ch, CURLOPT_URL, "https://www.linkedin.com/uas/login-submit");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);

$store = curl_exec($ch);
$cookielist = curl_getinfo($ch, CURLINFO_COOKIELIST );
$string_version = implode(',', $cookielist);
//print_r($cookielist);
$jsessionid=$cookielist[0];
$a=preg_match('/"([^"]+)"/', $jsessionid, $m);
echo "jsessionid:".$jsessionid."<br>";
$aa=$m[1];
echo $m[1]."<br>";
$bcookie =$cookielist[1];
$b=preg_match('/"([^"]+)"/', $bcookie, $m);
echo "bcookie :".$bcookie."<br>";
$bb=$m[1];
echo $m[1]."<br>";
$bscookie  =$cookielist[2];
$c=preg_match('/"([^"]+)"/', $bscookie, $m);
$cc=$m[1];
echo "bscookie  :".$bscookie ."<br>";
echo $m[1]."<br>";
$lidc =$cookielist[3];
$d=preg_match('/"([^"]+)"/', $lidc, $m);
$dd=$m[1];
echo "lidc :".$lidc."<br>";
echo $m[1]."<br>";
$sl =$cookielist[4];
$ee=substr($cookielist[4], strpos($cookielist[4], "sl") + strlen("sl"));
$e=preg_match('/"([^"]+)"/', $sl, $m);
echo "sl:".$sl."<br>";
echo $ee."<br>";
//echo $m[1]."<br>";
$li_at =$cookielist[6];
$gg=substr($cookielist[6], strpos($cookielist[6], "li_at") + strlen("li_at"));
echo "li_at :".$li_at."<br>";
//echo $m[1]."<br>";
$lang =$cookielist[7];
$ff=substr($cookielist[7], strpos($cookielist[7], "lang") + strlen("lang"));
//$e=preg_match('/"([^"]+)"/', $visit, $m);
echo "lang :".$lang."<br>";
echo $ff."<br>";

//print_r(curl_exec($ch));
//Print_r($post_string);
$store = curl_exec($ch);
$cookielist = curl_getinfo($ch, CURLINFO_COOKIELIST );
//print_r($cookielist);
$string_version = implode(',', $cookielist);
//print_r($string_version);
//print_r($cookielist[2]);
//$cookie = substr($cookielist[3], strpos($cookielist[3], "lidc") + strlen("lidc"));
//echo "lidc ".$cookie;
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo "httpresponse:".$http_code;

try{
if (stripos($store, "session_password-login-error") !== false){
    $err = trim(strip_tags(fetch_value($store, '<span class="error" id="session_password-login-error">', '</span>')));
    echo "Login error : ".$err;
}elseif (stripos($store, 'profile-nav-item') !== false) {
		//$returned_content = get_data('https://www.linkedin.com/in/jyoti-madkar-196b1ba3');   
		 //echo $returned_content;
		$setcookie="{lidc=".$dd.", sl=".$ee.",lang=".$ff.", JSESSIONID=".$aa.", li_at=".$ff."}";
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.linkedin.com/in/jyoti-madkar-196b1ba3');
        curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7)');
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		setcookie("lidc",$dd);
		setcookie("sl",$ee);
		setcookie("lang",$ff);
		setcookie("JSESSIONID",$aa);
		setcookie("li_at",$gg);
		
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		//curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile); // Cookie aware
		//curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile); // Cookie aware
		
		curl_setopt($ch, CURLOPT_POSTFIELDS, "");
		
        $response = curl_exec($ch); 
		
		
		echo "</br>".$setcookie."</br>";
		$jsonData = json_decode($response,true);
		
		var_dump($jsonData);
		$intReturnCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
		echo $intReturnCode;
		curl_close($ch);
       
}else{
    echo "unknown error";
}
}catch(Exception $e){
	print_r($e);
}



/*
try{
if (stripos($store, "session_password-login-error") !== false){
    $err = trim(strip_tags(fetch_value($store, '<span class="error" id="session_password-login-error">', '</span>')));
    echo "Login error : ".$err;
}elseif (stripos($store, 'profile-nav-item') !== false) {
        curl_setopt($ch, CURLOPT_URL, 'https://www.linkedin.com/in/sushant-puntambekar-20488362/');
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        $content = curl_exec($ch);
		
        curl_close($ch);

        //echo $content;
}else{
    echo "unknown error";
}
}catch(Exception $e){
	print_r($e);
}
*/


	
?>