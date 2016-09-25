<?php
/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if(!defined('INDEX')){
	exit('Access Denied');
}
if(file_exists(TPLPATH.'/inc/header.tpl.php')){
	include(TPLPATH.'/inc/header.tpl.php');
}else{
	include(TPLPATH.'/header.tpl.php');
}
?>
<style>
html {
	overflow-x: hidden;
}
</style>
<script>
	function Autohide(){
		$('#ajax_iframe_loading').hide();
	}
	$(function(){
		if(typeof getCookie('userlogininfo')=='undefined'){
			$('#tiplogin-beijing').show();
		}else{
			$('#ajax_iframe_loading').show();
			
			setTimeout('Autohide()',3000);
		}
	});
	
  	setInterval("listenHash()", 500);
	var pageTime = 0;
	var adjustH=0;
	function listenHash() {
		var url = location.href;
		url = url.split('#');
		if (url[1] != '') {
			var p=parseInt(url[1]);
			if(p<10000){
				if(adjustH==0){
					$('.iframe iframe')[0].style.height=p+'px';
					$('#tiplogin-beijing')[0].style.height=p+'px';
					$('#ajax_iframe_loading')[0].style.height=(p-250)+'px';
					adjustH=1;
				}
			}
		} 
		else {
			pageTime = parseInt(Date.parse(new Date()));
		}
	}
</script>
<div class="mainbody" style="position:relative">
   <style type="text/css">
        .slider-login {
            margin: 0 auto;
            position: relative;
            width: 1000px;
            z-index: 12;
        }
        .slider-new, .slider-new .slider-img, .slider-new .slider-img li {
            height: 300px;
        }
        .slider-login-zindex {
            height: 228px;
            position: absolute;
            right: 0;
            top: -530px;
            width: 298px;
            z-index: 11;
        }
        .slider-login-bj {
            background: #fff none repeat scroll 0 0;
            height: 228px;
            left: 0;
            opacity: 0.8;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 11;
        }
        .slider-login-module {
            left: 0;
            position: absolute;
            top: 0;
            z-index: 12;
        }
        .slm-title {
            color: #333;
            font-size: 16px;
            height: 17px;
            line-height: 17px;
            margin-top: 28px;
            text-indent: 25px;
        }
        .slm-info {
            color: #e25353;
            font-size: 52px;
            font-weight: 700;
            height: 73px;
            line-height: 73px;
            text-indent: 22px;
        }
        .slm-content {
            color: #333;
            font-size: 13px;
            height: 17px;
            line-height: 17px;
            text-indent: 25px;
        }
        .slm-content span {
            color: #e25353;
            font-size: 16px;
        }
        .slm-other {
            padding-left: 24px;
        }
        .slm-other-btn {
            background: #ef5a50 none repeat scroll 0 0;
            color: #fff;
            display: block;
            font-size: 22px;
            font-weight: 700;
            height: 44px;
            line-height: 44px;
            margin-top: 10px;
            text-align: center;
            width: 253px;
        }
        .slm-other-btn {
            box-shadow: 0 2px 1px rgba(200, 200, 200, 0.9);
        }
        .slm-other-btn:hover {
            background: #c03b37 none repeat scroll 0 0;
            color: #fff;
            transition: all 0.2s ease-in-out 0s;
        }
        .slm-other p {
            color: #333;
            padding-top: 7px;
            text-align: right;
        }
        .slm-other-btn-1, .slm-other-btn-1:hover {
            color: #333;
            text-decoration: underline;
        }
        .slms-other-btn-1, .slms-other-btn-1:hover {
            color: #333;
            text-decoration: underline;
        }
        .slider-login-module-succeed {
            display: block;
            left: 0;
            position: absolute;
            top: 0;
            z-index: 12;
        }
        .slms-title {
            color: #333;
            font-size: 17px;
            height: 17px;
            line-height: 17px;
            margin-top: 20px;
            text-indent: 25px;
        }
        .slms-content {
            color: #333;
            font-size: 15px;
            height: 17px;
            line-height: 17px;
            margin-top: 10px;
            text-indent: 30px;
        }
        .slms-content span {
            color: #e25353;
        }
        .slms-other {
            color: #333;
            padding-left: 24px;
            padding-top: 20px;
            text-align: right;
        }
        .slms-other-btn {
            background: #ef5a50 none repeat scroll 0 0;
            color: #fff;
            display: block;
            font-size: 22px;
            font-weight: 700;
            height: 44px;
            line-height: 44px;
            text-align: center;
            width: 253px;
        }
        .slms-other-btn {
            box-shadow: 0 2px 1px rgba(200, 200, 200, 0.9);
        }
        .slms-other-btn:hover {
            background: #c03b37 none repeat scroll 0 0;
            color: #fff;
            transition: all 0.2s ease-in-out 0s;
        }
        .slms-other p {
            padding-top: 16px;
        }


    </style>
    <div class="slider-login">
        <div class="slider-login-zindex" style="top: 30px;">
            <div class="slider-login-bj" style="opacity: 0.6;"></div>
            <dl class="slider-login-module-succeed" style="display: none;">
                <dt class="slms-title">欢迎来到物筹巴巴</dt>
                <dd class="slms-content">
                    分散精选、周期短、实物可控
                </dd>
                <dd class="slms-content">
                    安全管理投资从这里开始
                </dd>
                <dd class="slms-content">
                    您当前登录的账户是：<span id="sliderName"></span>
                </dd>
                <dd class="slms-other">
                    <a href="<?=u('user','index')?>" class="slms-other-btn ">进入我的账户</a>
                    <p><a href="<?=u('user','exit')?>" class="slms-other-btn-1">退出登录</a></p>
                </dd>
            </dl>
            <dl class="slider-login-module">
                <dt class="slm-title">各平台预期年收益</dt>
                <dd class="slm-info">
                    <strong>10<span>%</span>~300</strong><span>%</span>
                </dd>
                <dd class="slm-content">
                    平均<span>10</span>倍以上P2P收益/实实在在的物权收益
                </dd>
                <dd class="slm-other">
                    <a rel="nofollow" href="<?=u('user','register')?>" _reg_val="index_banner_regab" class="slm-other-btn setRegLog">注册送50元</a>
                    <p>已有账号？<a rel="nofollow" href="<?=u('user','login')?>">立即登录</a></p>
                </dd>
            </dl>
        </div>
    </div>
   
  <div class="iframe">
    <!--  <iframe src="http://www.fanlicheng.com/plugin/licai/index.html?mid=<?=$dduser['id']?>&url=<?=urlencode(SITEURL)?>&cururl=<?=urlencode(p(MOD,ACT))?>" style='width:100%;height:1780px;' scrolling="no" frameborder='no' border='0'></iframe> -->
    <iframe src="http://www.fanlicheng.com/plugin/licai/index.html?mid=<?=$dduser['id']?>" style='width:100%;height:1780px;' scrolling="no" frameborder='no' border='0'></iframe>
    <div id="ajax_iframe_loading" style="background:#999; color:#000;filter:alpha(opacity=80);-moz-opacity:0.8;opacity: 0.8;;width:100%; height:1530px; padding-top:250px;margin:auto;text-align:center; z-index:555; position:absolute; top:0px; left:0px;  font-size:16px; font-weight:bolder; display:none;"><img src="<?=PLUGIN_TPLURL?>images/ajax_loader.gif" style="margin-bottom:-2px" />&nbsp;&nbsp;正在拼命加载中</div>
    <a href="<?=u('user','login')?>" ><div id="tiplogin-beijing" style="width: 1000px; height: 1780px; top: 0px; position: absolute; left: 50%; margin-left: -499px;filter:alpha(opacity=1);-moz-opacity:0.1;-khtml-opacity: 0.1;opacity: 0.1; background-color:#FFF; display:none;">&nbsp;</div></a>
  </div>
</div>
<?php 
if(file_exists(TPLPATH.'/inc/footer.tpl.php')){
	include(TPLPATH.'/inc/footer.tpl.php');
}else{
	include(TPLPATH.'/footer.tpl.php');
}
?>
