<?php 

//构建消息体http://sms.106818.com:9885/c123/recvsms?uid=用户账号&pwd=MD5位32密码
$smscode=rand(10000, 99999);
//$content='284567';



$c="【物筹巴巴】验证码为:".$smscode;


$gc=iconv('utf-8','gbk',$c);

$cc=urlencode($gc);
$uid='301012';
$pwd='p2p012';
$mobile=$_POST['mobile'];



// $p['uid']=$uid;
// $p['pwd']=md5($pwd);
// $p['mobile']=$mobile;
// $p['content']=$cc;
//$url='http://sms.106818.com:9885/c123/sendsms';
$get="http://sms.106818.com:9885/c123/sendsms?uid=".$uid."&pwd=".md5($pwd)."&mobile=".$mobile."&content=".$cc;
//$get="http://www.baidu.com/";
$s=curl_get($get);
error_log('mimodpay:'.date("Y-m-d H:i:s",time())."\n get::".$get."\n.s=".$s,3,'sms.log');



// $url="http://127.0.0.1/h5game/123.jpg";
// $filename="/home/liq/m_234wan/uploads/"."yzm".time().rand(0, 10000).'.jpg';
// //		$s=curl_get_contents($url);
// //		echo strlen($s);
// //		$tp = @fopen($filename, 'a');
// //fwrite($tp, $s);
// //echo feof($tp);
// //  fclose($tp);
// if(curl_savefile($url, $filename))echo $filename;



function  curl_get($url, $timeout=20) {
	$ch = curl_init ();
	curl_setopt ( $ch, CURLOPT_URL, $url );

	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );

	curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );

	curl_setopt ( $ch, CURLOPT_HEADER, false );

	$file_contents = curl_exec ( $ch );

	curl_close ( $ch );

	return $file_contents;

}
function curl_post($url, $post_data = '', $timeout = 5) { //curl


	$ch = curl_init ();

	curl_setopt ( $ch, CURLOPT_URL, $url );

	curl_setopt ( $ch, CURLOPT_POST, 1 );

	if ($post_data != '') {

		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );

	}

	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );

	curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );

	curl_setopt ( $ch, CURLOPT_HEADER, false );

	$file_contents = curl_exec ( $ch );

	curl_close ( $ch );

	return $file_contents;

}

?>