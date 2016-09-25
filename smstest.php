<?php
function smsto($telphone,$message)
{
	//短信接口用户名 $uid，如果没有或不能发送请与客服QQ：272927682联系
	$uid = '301012';
	//短信接口密码 $passwd
	$passwd = md5('p2p012');

	//发送到的目标手机号码 $telphone
	$telphone = '13845689748';//此处改成自己的手机号
	//短信内容 $message
	//$message = "这是一条测试信息";
	$message1 =urlencode(mb_convert_encoding($message, 'utf-8', 'gb2312'));
	$gateway = "http://sms.106818.com:9885/c123/sendsms?uid={$uid}&pwd={$passwd}&mobile=号码&content=内容";
	$result = file_get_contents($gateway);

	return $result;
}