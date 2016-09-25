<?php
if(!defined('DDROOT')){
	exit('Access Denied');
}
if($_POST){
	$tbnick=$_POST['tbnick'];
	$webid=$_POST['webid'];
	$webname=$_POST['webname'];
	$realname=$_POST['realname'];
	$state=$_GET['state'];
	$ok=0;
	if($tbnick==''){
		$ok=0;
		$msg='请填写淘宝昵称';
	}
	else{
		$apilogin=$duoduo->select('apilogin','id,uid','webname="'.$tbnick.'" and web="tb"');
		if($apilogin['uid']>0){
			$user=$duoduo->select('user','jifenbao,tbyitixian,realname','id="'.$apilogin['uid'].'"');
			if($user['jifenbao']+$user['tbyitixian']>0){
				if($user['realname']==$realname){
					$ok=1;
				}
				else{
					$ok=0;
					$msg='真实姓名填写错误';
				}
			}
			else{
				$ok=1;
			}
			if($ok==1){
				$duoduo->update('apilogin',array('webid'=>$webid),'id="'.$apilogin['id'].'"');
				$input=array('webname'=>$webname,'webid'=>$webid,'web'=>'tb');
				echo script('alert("绑定成功")');
				if($state=='tb_wap'){
					echo postform(wap_l('user','weblogin'),$input);
				}
				else{
					echo postform(u('api','do'),$input);
				}
			}
		}
		else{
			$ok=0;
			$msg='此淘宝昵称之前没有登录过网站';
		}
	}
	jump(u(MOD,ACT,array('state'=>$state,'webid'=>$webid,'webname'=>$webname,'notip'=>1)),$msg);
}
else{
	$state=$_GET['state'];
	$webid=$_GET['webid'];
	$webname=$_GET['webname'];
	$first=$_GET['first'];
	if($first==1){
		$input=array('webname'=>$webname,'webid'=>$webid,'web'=>'tb');
		if($state=='tb_wap'){
			echo postform(wap_l('user','weblogin'),$input);
		}
		else{
			echo postform(u('api','do'),$input);
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="yes" name="apple-touch-fullscreen">
<meta content="telephone=no,email=no" name="format-detection">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<style>
*{
	margin:0;
	padding:0;
}
body, html {
	background-color: #F0F0F0
}
a {
	color: #f40;
	text-decoration: none
}
input,button,select,textarea{outline:none}
::-webkit-input-placeholder {
	color:#DDD
}
@font-face {
  font-family: 'iconfont';
  src: url('http://at.alicdn.com/t/font_1465021234_9190812.eot'); /* IE9*/
  src: url('http://at.alicdn.com/t/font_1465021234_9190812.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
  url('http://at.alicdn.com/t/font_1465021234_9190812.woff') format('woff'), /* chrome、firefox */
  url('http://at.alicdn.com/t/font_1465021234_9190812.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/
  url('http://at.alicdn.com/t/font_1465021234_9190812.svg#iconfont') format('svg'); /* iOS 4.1- */
}
.iconfont {
	font-family: iconfont!important;
	font-style: normal;
	-webkit-font-smoothing: antialiased;
	-webkit-text-stroke-width: .2px;
	-moz-osx-font-smoothing: grayscale
}
.mlogin {
	font-size:16px;
}
.mlogin .iconfont {
font-size:.426667em;
	color: #6C6C6C
}
.hide {
	display: none!important
}
.ft-left {
	float: left
}
.ft-right {
	float: right
}
.head {
	width: 100%;
	height: 50px;
	line-height: 50px;
	border-bottom: 1px solid #C8C8C8;
	color: #000;
	text-align: center;
	font-size:18;
	background-color: #F7F7F8;
	position:relative;
}
.head .backindex{
	position:absolute;
	left:5px;
	top:10px;
	display:block;
	padding:5px;
	line-height:normal;
}
.mlogin {
	margin-top:10px
}
.mlogin .field {
	display: -webkit-box;
	display: -webkit-flex;
	-webkit-box-align: center;
	-webkit-align-items: center;
	border-bottom: 1px solid #DDD;
	color: #6C6C6C;
	background-color: #fff;
	text-align: left;
	height:50px;
	line-height:50px;
}
.field .label {
	width: 25%;
	float:left;
	text-align:center;
	padding:0px 5px
}
.field .field-control {
	float:left;
	width: 70%;
}
.field .field-control input {
	-webkit-appearance: none;
	width: 90%;
	padding: 0;
	border: 0;
	background-color: transparent;
	padding:5px;
	font-size:15px;
	border:#C7C7C7 1px solid;
}
.submit {
	height:35px;
	line-height:35px;
	width:100%;
	display:inline-block;
}
.button {
	width: 95%;
	height: 50px;
	line-height: 50px;
	border: 1px solid #f40;
	border-radius: 5px;
	color: #fff;
	background-color: #f40;
	text-align: center;
	font-size:20px;
	display: block;
	margin:10px auto 0;
}
.button-white {
	border: 1px solid #f40;
	background: 0 0;
	color: #f40
}
.submit button:disabled {
	color: #ffa286
}
.icon-clear {
	visibility: hidden
}

.tbgonggao
{
	padding:15px;
	color:#666;
	line-height:25px;
}
</style>
<title>绑定淘宝账号_<?=WEBNAME?></title>
<script src="js/jquery.js"></script>
</head>
<body style="height:100%">
<div style="max-width:500px; margin:auto;">
<div id="main" style="display:none">
	<div class="head">
        <a href="<?=SITEURL?>" class="backindex"><i class="iconfont">&#xe6a2;</i>返回首页</a>绑定淘宝账号
    </div>
    <div class="tbgonggao">
    公告：由于淘宝官方调整登录接口，造成从今日起登录的淘宝账号无法与之前登录的关联，所以需要您操作一次绑定，给您造成的不变，<?=WEBNAME?>深表歉意。
    </div>
 	<form id="loginForm" class="mlogin" method="post" onSubmit="$('#submit-btn').html('绑定中，请稍后');return true;">
        <div class="field autoClear">
            <div class="label">淘宝昵称</div>
            <div class="field-control">
                <input type="text" class="input-required" name="tbnick" placeholder="填写您的淘宝昵称" value="" id="tbnick">
            </div>
            <div class="icon-clear"><i class="iconfont">&#xe613;</i></div>
        </div>
        <div class="field autoClear">
            <div class="label">真实姓名</div>
            <div class="field-control">
                <input type="text"  class="input-required" name="realname" placeholder="填写您的真实姓名" value="" id="realname">
            </div>
            <div class="icon-clear"><i class="iconfont">&#xe613;</i></div>
            <div class="pwd pwd-show" id="show-pwd"></div>
        </div>

		<div class="submit">
            <button type="submit" class="button" name="sub" value="1" id="submit-btn">绑定</button>
        </div>
        <input type="hidden" name="webid" value="<?=$_GET['webid']?>" />
<input type="hidden" name="webname" value="<?=$_GET['webname']?>" />
<input type="hidden" name="state" value="<?=$_GET['state']?>" />
    </form>
    </div>
<div id="ceng" style="position:absolute; width:100%; text-align:center; max-width:500px; z-index:2; display:none">
    <div style=" margin:auto; background:#FFF; font-size:15px; line-height:2; padding:15px 0">
<div>您是第一次使用淘宝账号登录本站吗？</div>
<div><button style="font-size:20px; padding:5px" onClick="window.location.href='<?=u(MOD,ACT,array('webid'=>$webid,'webname'=>$webname,'state'=>$state,'first'=>1))?>'">是的</button>&nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:20px; padding:5px" onClick="$('#ceng,#gai').hide();$('#main').show()">不是</button></div>
</div>
    </div>
</div>
<div id="gai" style="height:100%; display:none; width:100%; position:absolute; top:0; left:0; background:#000;filter:alpha(opacity=50); -moz-opacity:0.5;   -khtml-opacity: 0.5;opacity: 0.5;"></div>
<script>
<?php if($_GET['notip']!=1){?>
$('#ceng,#gai').show();
var a=$('#ceng').height();
$('#ceng').css('top',(($(window).height()-a)/2)+'px');
<?php }else{?>
$('#main').show();
<?php }?>
</script>
</body>
</html>